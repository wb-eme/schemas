// @link http://schemas.wbeme.com/json-schema/eme/solicits/event/submission-restored/1-0-0.json#
import EmeAccountsAccountRefV1Mixin from '@wbeme/schemas/eme/accounts/mixin/account-ref/AccountRefV1Mixin';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsAnalyticsTrackedMessageV1Mixin from '@gdbots/schemas/gdbots/analytics/mixin/tracked-message/TrackedMessageV1Mixin';
import GdbotsPbjxEventV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Mixin';
import GdbotsPbjxEventV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/event/EventV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class SubmissionRestoredV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:eme:solicits:event:submission-restored:1-0-0', SubmissionRestoredV1,
      [
        Fb.create('submission_id', T.TimeUuidType.create())
          .required()
          .build(),
      ],
      [
        EmeAccountsAccountRefV1Mixin.create(),
        GdbotsPbjxEventV1Mixin.create(),
        GdbotsAnalyticsTrackedMessageV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxEventV1Trait(SubmissionRestoredV1);
MessageResolver.register('eme:solicits:event:submission-restored', SubmissionRestoredV1);
Object.freeze(SubmissionRestoredV1);
Object.freeze(SubmissionRestoredV1.prototype);
