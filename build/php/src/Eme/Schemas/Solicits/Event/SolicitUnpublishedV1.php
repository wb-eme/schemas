<?php
// @link http://schemas.wbeme.com/json-schema/eme/solicits/event/solicit-unpublished/1-0-0.json#
namespace Eme\Schemas\Solicits\Event;

use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1 as EmeAccountsAccountRefV1;
use Eme\Schemas\Accounts\Mixin\AccountRef\AccountRefV1Mixin as EmeAccountsAccountRefV1Mixin;
use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\NodeUnpublished\NodeUnpublishedV1 as GdbotsNcrNodeUnpublishedV1;
use Gdbots\Schemas\Ncr\Mixin\NodeUnpublished\NodeUnpublishedV1Mixin as GdbotsNcrNodeUnpublishedV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1 as GdbotsPbjxEventV1;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Mixin as GdbotsPbjxEventV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Event\EventV1Trait as GdbotsPbjxEventV1Trait;

final class SolicitUnpublishedV1 extends AbstractMessage implements
    SolicitUnpublished,
    EmeAccountsAccountRefV1,
    GdbotsPbjxEventV1,
    GdbotsNcrNodeUnpublishedV1
{
    use GdbotsPbjxEventV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:eme:solicits:event:solicit-unpublished:1-0-0', __CLASS__,
            [],
            [
                EmeAccountsAccountRefV1Mixin::create(),
                GdbotsPbjxEventV1Mixin::create(),
                GdbotsNcrNodeUnpublishedV1Mixin::create(),
            ]
        );
    }
}
