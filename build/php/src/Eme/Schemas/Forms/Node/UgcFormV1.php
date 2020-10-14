<?php
declare(strict_types=1);

// @link http://schemas.wbeme.com/json-schema/eme/forms/node/ugc-form/1-0-0.json#
namespace Eme\Schemas\Forms\Node;

use Eme\Schemas\Sys\TenantId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Common\FileId;
use Gdbots\Schemas\Forms\Enum\PiiImpact;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;

final class UgcFormV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:eme:forms:node:ugc-form:1-0-0';
    const SCHEMA_CURIE = 'eme:forms:node:ugc-form';
    const SCHEMA_CURIE_MAJOR = 'eme:forms:node:ugc-form:v1';
    const MIXINS = [
      'eme:sys:mixin:tenant-id:v1',
      'eme:sys:mixin:tenant-id',
      'gdbots:ncr:mixin:node:v1',
      'gdbots:ncr:mixin:node',
      'gdbots:forms:mixin:form:v1',
      'gdbots:forms:mixin:form',
      'gdbots:ncr:mixin:expirable:v1',
      'gdbots:ncr:mixin:expirable',
      'gdbots:ncr:mixin:publishable:v1',
      'gdbots:ncr:mixin:publishable',
      'gdbots:common:mixin:labelable:v1',
      'gdbots:common:mixin:labelable',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
    ];

    use GdbotsNcrNodeV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The EME tenant that this message is associated with.
                 */
                Fb::create('tenant_id', T\IdentifierType::create())
                    ->required()
                    ->className(TenantId::class)
                    ->build(),
                /*
                 * The "_id" value:
                 * - MUST NOT change for the life of the node.
                 * - SHOULD be globally unique
                 * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
                 */
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UuidIdentifier::generate(); })
                    ->className(UuidIdentifier::class)
                    ->overridable(true)
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->withDefault("draft")
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * A fully qualified reference to what created this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that creates nodes, not a user.
                 */
                Fb::create('creator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('updated_at', T\MicrotimeType::create())
                    ->useTypeDefault(false)
                    ->build(),
                /*
                 * A fully qualified reference to what updated this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that updates nodes, not a user.
                 * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('updater_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * A reference to the last event that changed the state of this node.
                 * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('last_event_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                /*
                 * A short description (a few sentences) about this form. This field should
                 * not have html as it is used in metadata.
                 */
                Fb::create('description', T\TextType::create())
                    ->build(),
                Fb::create('thank_you_header', T\StringType::create())
                    ->build(),
                /*
                 * A short thank you message (a few sentences) a user will see after
                 * they submit this form. This field should have little to no html
                 * as it can be used in various contexts.
                 */
                Fb::create('thank_you_text', T\TextType::create())
                    ->build(),
                Fb::create('thank_you_url', T\StringType::create())
                    ->format(Format::URL())
                    ->build(),
                Fb::create('template', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                /*
                 * A map containing (HTML, JavaScript, CSS, etc.) that is injected into
                 * a template at a named insertion point, e.g. "html_head" or "footer".
                 */
                Fb::create('custom_code', T\TextType::create())
                    ->asAMap()
                    ->build(),
                Fb::create('fields', T\MessageType::create())
                    ->asAList()
                    ->anyOfCuries([
                        'gdbots:forms:mixin:field',
                    ])
                    ->build(),
                Fb::create('hashtags', T\StringType::create())
                    ->asASet()
                    ->format(Format::HASHTAG())
                    ->build(),
                Fb::create('disclaimer', T\TextType::create())
                    ->build(),
                Fb::create('image_id', T\IdentifierType::create())
                    ->className(FileId::class)
                    ->build(),
                Fb::create('pii_impact', T\StringEnumType::create())
                    ->className(PiiImpact::class)
                    ->build(),
                Fb::create('expires_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_at', T\DateTimeType::create())
                    ->build(),
                /*
                 * A set of strings used for categorization or workflow.
                 * Similar to slack channels, github or gmail labels.
                 */
                Fb::create('labels', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w-]+$')
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
            ],
            self::MIXINS
        );
    }

    public function getUriTemplateVars(): array
    {
        return ['_id' => $this->fget('_id')];
    }
}
