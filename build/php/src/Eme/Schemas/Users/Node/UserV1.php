<?php
// @link http://schemas.wbeme.com/json-schema/eme/users/node/user/1-0-0.json#
namespace Eme\Schemas\Users\Node;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1 as EmeAccountsAccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin as EmeAccountsAccountRefV1Mixin;
use Eme\Schemas\Users\UserId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Common\Enum\Gender;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1 as GdbotsCommonTaggableV1;
use Gdbots\Schemas\Common\Mixin\Taggable\TaggableV1Mixin as GdbotsCommonTaggableV1Mixin;
use Gdbots\Schemas\Geo\Address as GdbotsGeoAddress;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1 as GdbotsNcrIndexedV1;
use Gdbots\Schemas\Ncr\Mixin\Indexed\IndexedV1Mixin as GdbotsNcrIndexedV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1 as GdbotsNcrNodeV1;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Trait as GdbotsNcrNodeV1Trait;

final class UserV1 extends AbstractMessage implements
    User,
    EmeAccountsAccountRefV1,
    GdbotsNcrNodeV1,
    GdbotsNcrIndexedV1,
    GdbotsCommonTaggableV1
{
    use GdbotsNcrNodeV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:users:node:user:1-0-0', __CLASS__,
            [
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UserId::generate(); })
                    ->className(UserId::class)
                    ->build(),
                Fb::create('first_name', T\StringType::create())
                    ->build(),
                Fb::create('last_name', T\StringType::create())
                    ->build(),
                Fb::create('email', T\StringType::create())
                    ->format(Format::EMAIL())
                    ->build(),
                Fb::create('email_domain', T\StringType::create())
                    ->format(Format::HOSTNAME())
                    ->build(),
                Fb::create('address', T\MessageType::create())
                    ->anyOfClassNames([
                        GdbotsGeoAddress::class,
                    ])
                    ->build(),
                /*
                 * A general format for international telephone numbers.
                 * @link https://en.wikipedia.org/wiki/E.164
                 */
                Fb::create('phone', T\StringType::create())
                    ->asAMap()
                    ->pattern('^\+?[1-9]\d{1,14}$')
                    ->build(),
                Fb::create('dob', T\DateType::create())
                    ->build(),
                Fb::create('gender', T\IntEnumType::create())
                    ->withDefault(Gender::UNKNOWN())
                    ->className(Gender::class)
                    ->build(),
                /*
                 * Networks is a map that contains handles/usernames on a social network.
                 * E.g. facebook:homer, twitter:stackoverflow, youtube:coltrane78.
                 */
                Fb::create('networks', T\StringType::create())
                    ->asAMap()
                    ->maxLength(50)
                    ->pattern('^[\w\.-]+$')
                    ->build(),
                Fb::create('hashtags', T\StringType::create())
                    ->asASet()
                    ->format(Format::HASHTAG())
                    ->build(),
                Fb::create('is_blocked', T\BooleanType::create())
                    ->build(),
                /*
                 * Indicates that the user is a staff member and has access to the dashboard.
                 */
                Fb::create('is_staff', T\BooleanType::create())
                    ->build(),
                /*
                 * A user's roles determine what permissions they'll have when using the system.
                 */
                Fb::create('roles', T\StringType::create())
                    ->asASet()
                    ->pattern('^[\w_]+$')
                    ->build(),
            ],
            [
                EmeAccountsAccountRefV1Mixin::create(),
                GdbotsNcrNodeV1Mixin::create(),
                GdbotsNcrIndexedV1Mixin::create(),
                GdbotsCommonTaggableV1Mixin::create(),
            ]
        );
    }

    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['user_id' => (string)$this->get('_id')];
    }
}
