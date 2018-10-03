/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.wbeme.com/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@wbeme/schemas/eme/solicits/event/NoteAddedToSubmissionV1';
import '@wbeme/schemas/eme/solicits/event/SolicitCreatedV1';
import '@wbeme/schemas/eme/solicits/event/SolicitDeletedV1';
import '@wbeme/schemas/eme/solicits/event/SolicitPublishedV1';
import '@wbeme/schemas/eme/solicits/event/SolicitUnpublishedV1';
import '@wbeme/schemas/eme/solicits/event/SolicitUpdatedV1';
import '@wbeme/schemas/eme/solicits/event/SubmissionMarkedAsReadV1';
import '@wbeme/schemas/eme/solicits/event/SubmissionMarkedAsUnreadV1';
import '@wbeme/schemas/eme/solicits/event/SubmissionReceivedV1';
import '@wbeme/schemas/eme/solicits/event/SubmissionRejectedV1';
import '@wbeme/schemas/eme/users/event/UserCreatedV1';
import '@wbeme/schemas/eme/users/event/UserDeletedV1';
import '@wbeme/schemas/eme/users/event/UserRolesGrantedV1';
import '@wbeme/schemas/eme/users/event/UserRolesRevokedV1';
import '@wbeme/schemas/eme/users/event/UserUpdatedV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeCreatedV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeDeletedV1';
import '@gdbots/schemas/gdbots/pbjx/event/EventExecutionFailedV1';
import '@gdbots/schemas/gdbots/pbjx/event/HealthCheckedV1';

export default MessageResolver;