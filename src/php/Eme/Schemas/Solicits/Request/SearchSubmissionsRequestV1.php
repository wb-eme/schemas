<?php

namespace Eme\Schemas\Solicits\Request;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Trait;
use Eme\Schemas\Solicits\SolicitId;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1Mixin;
use Gdbots\Schemas\Analytics\Mixin\TrackedMessage\TrackedMessageV1Trait;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait;
use Gdbots\Schemas\Pbjx\Mixin\SearchEventsRequest\SearchEventsRequestV1;
use Gdbots\Schemas\Pbjx\Mixin\SearchEventsRequest\SearchEventsRequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\SearchEventsRequest\SearchEventsRequestV1Trait;

final class SearchSubmissionsRequestV1 extends AbstractMessage implements
    SearchSubmissionsRequest,
    AccountRefV1,
    RequestV1,
    SearchEventsRequestV1,
    TrackedMessageV1
  
{
    use AccountRefV1Trait;
    use RequestV1Trait;
    use SearchEventsRequestV1Trait;
    use TrackedMessageV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:solicits:request:search-submissions-request:1-0-0', __CLASS__,
            [
                Fb::create('solicit_id', T\IdentifierType::create())
                    ->className('Eme\Schemas\Solicits\SolicitId')
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
                    ->className('Gdbots\Schemas\Geo\Address')
                    ->build(),
                Fb::create('age_min', T\TinyIntType::create())
                    ->max(120)
                    ->build(),
                Fb::create('age_max', T\TinyIntType::create())
                    ->max(120)
                    ->build(),
                Fb::create('has_notes', T\TrinaryType::create())
                    ->build(),
                Fb::create('is_blocked', T\TrinaryType::create())
                    ->build(),
                Fb::create('is_read', T\TrinaryType::create())
                    ->build(),
                Fb::create('last_read_after', T\DateTimeType::create())
                    ->build(),
                Fb::create('last_read_before', T\DateTimeType::create())
                    ->build(),
                Fb::create('last_read_by_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('is_verified', T\TrinaryType::create())
                    ->build()
            ],
            [
                AccountRefV1Mixin::create(), 
                RequestV1Mixin::create(), 
                SearchEventsRequestV1Mixin::create(), 
                TrackedMessageV1Mixin::create()
            ]
        );
    }
}
