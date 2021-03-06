// @link http://schemas.wbeme.com/json-schema/eme/solicits/command/export-submissions/1-0-0.json#
import EmeAccountsAccountRefV1Mixin from '@wbeme/schemas/eme/accounts/mixin/account-ref/AccountRefV1Mixin';
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsPbjxCommandV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Mixin';
import GdbotsPbjxCommandV1Trait from '@gdbots/schemas/gdbots/pbjx/mixin/command/CommandV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';

export default class ExportSubmissionsV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:eme:solicits:command:export-submissions:1-0-0', ExportSubmissionsV1,
      [
        Fb.create('search_request', T.MessageType.create())
          .required()
          .anyOfCuries([
            'eme:solicits:request:search-submissions-request',
          ])
          .build(),
      ],
      [
        EmeAccountsAccountRefV1Mixin.create(),
        GdbotsPbjxCommandV1Mixin.create(),
      ],
    );
  }
}

GdbotsPbjxCommandV1Trait(ExportSubmissionsV1);
MessageResolver.register('eme:solicits:command:export-submissions', ExportSubmissionsV1);
Object.freeze(ExportSubmissionsV1);
Object.freeze(ExportSubmissionsV1.prototype);
