<?php
// @link http://schemas.wbeme.com/json-schema/eme/users/command/create-user/1-0-0.json#
namespace Eme\Schemas\Users\Command;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1 as EmeAccountsAccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin as EmeAccountsAccountRefV1Mixin;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1 as GdbotsNcrCreateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\CreateNode\CreateNodeV1Mixin as GdbotsNcrCreateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class CreateUserV1 extends AbstractMessage implements
    CreateUser,
    EmeAccountsAccountRefV1,
    GdbotsPbjxCommandV1,
    GdbotsNcrCreateNodeV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:users:command:create-user:1-0-0', __CLASS__,
            [],
            [
                EmeAccountsAccountRefV1Mixin::create(),
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrCreateNodeV1Mixin::create(),
            ]
        );
    }
}
