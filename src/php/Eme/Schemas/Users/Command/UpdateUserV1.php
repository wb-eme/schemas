<?php

namespace Eme\Schemas\Users\Command;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Trait;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Trait;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait;

final class UpdateUserV1 extends AbstractMessage implements
    UpdateUser,
    AccountRefV1,
    CommandV1,
    UpdateNodeV1
  
{
    use AccountRefV1Trait;
    use CommandV1Trait;
    use UpdateNodeV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:users:command:update-user:1-0-0', __CLASS__,
            [],
            [
                AccountRefV1Mixin::create(), 
                CommandV1Mixin::create(), 
                UpdateNodeV1Mixin::create()
            ]
        );
    }
}
