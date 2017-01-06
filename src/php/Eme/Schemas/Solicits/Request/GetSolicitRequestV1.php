<?php

namespace Eme\Schemas\Solicits\Request;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Trait;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\GetNodeRequest\GetNodeRequestV1Trait;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Request\RequestV1Trait;

final class GetSolicitRequestV1 extends AbstractMessage implements
    GetSolicitRequest,
    AccountRefV1,
    RequestV1,
    GetNodeRequestV1
  
{
    use AccountRefV1Trait;
    use RequestV1Trait;
    use GetNodeRequestV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:solicits:request:get-solicit-request:1-0-0', __CLASS__,
            [],
            [
                AccountRefV1Mixin::create(), 
                RequestV1Mixin::create(), 
                GetNodeRequestV1Mixin::create()
            ]
        );
    }
}
