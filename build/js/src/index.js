/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.wbeme.com/
 */

import MessageResolver from '@gdbots/pbj/MessageResolver';
import '@wbeme/schemas/eme/accounts/node/AccountV1';
import '@wbeme/schemas/eme/accounts/request/GetAccountRequestV1';
import '@wbeme/schemas/eme/accounts/request/GetAccountResponseV1';
import '@wbeme/schemas/eme/accounts/request/GetActiveAccountsRequestV1';
import '@wbeme/schemas/eme/accounts/request/GetActiveAccountsResponseV1';
import '@wbeme/schemas/eme/solicits/command/AddNoteToSubmissionV1';
import '@wbeme/schemas/eme/solicits/command/CreateSolicitV1';
import '@wbeme/schemas/eme/solicits/command/DeleteSolicitV1';
import '@wbeme/schemas/eme/solicits/command/ImportSolicitV1';
import '@wbeme/schemas/eme/solicits/command/ImportSubmissionV1';
import '@wbeme/schemas/eme/solicits/command/MarkSubmissionsAsReadV1';
import '@wbeme/schemas/eme/solicits/command/MarkSubmissionsAsUnreadV1';
import '@wbeme/schemas/eme/solicits/command/PublishSolicitV1';
import '@wbeme/schemas/eme/solicits/command/RejectSubmissionV1';
import '@wbeme/schemas/eme/solicits/command/SendSubmissionV1';
import '@wbeme/schemas/eme/solicits/command/UnpublishSolicitV1';
import '@wbeme/schemas/eme/solicits/command/UpdateSolicitV1';
import '@wbeme/schemas/eme/solicits/edge/SubmissionsV1';
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
import '@wbeme/schemas/eme/solicits/node/SolicitV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitBatchRequestV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitBatchResponseV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitHistoryRequestV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitHistoryResponseV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitRequestV1';
import '@wbeme/schemas/eme/solicits/request/GetSolicitResponseV1';
import '@wbeme/schemas/eme/solicits/request/GetSubmissionHistoryRequestV1';
import '@wbeme/schemas/eme/solicits/request/GetSubmissionHistoryResponseV1';
import '@wbeme/schemas/eme/solicits/request/SearchSolicitsRequestV1';
import '@wbeme/schemas/eme/solicits/request/SearchSolicitsResponseV1';
import '@wbeme/schemas/eme/solicits/request/SearchSubmissionsRequestV1';
import '@wbeme/schemas/eme/solicits/request/SearchSubmissionsResponseV1';
import '@wbeme/schemas/eme/users/command/CreateUserV1';
import '@wbeme/schemas/eme/users/command/DeleteUserV1';
import '@wbeme/schemas/eme/users/command/GrantRolesToUserV1';
import '@wbeme/schemas/eme/users/command/ImportUserV1';
import '@wbeme/schemas/eme/users/command/RevokeRolesFromUserV1';
import '@wbeme/schemas/eme/users/command/UpdateUserV1';
import '@wbeme/schemas/eme/users/event/UserCreatedV1';
import '@wbeme/schemas/eme/users/event/UserDeletedV1';
import '@wbeme/schemas/eme/users/event/UserRolesGrantedV1';
import '@wbeme/schemas/eme/users/event/UserRolesRevokedV1';
import '@wbeme/schemas/eme/users/event/UserUpdatedV1';
import '@wbeme/schemas/eme/users/node/UserV1';
import '@wbeme/schemas/eme/users/request/GetUserBatchRequestV1';
import '@wbeme/schemas/eme/users/request/GetUserBatchResponseV1';
import '@wbeme/schemas/eme/users/request/GetUserHistoryRequestV1';
import '@wbeme/schemas/eme/users/request/GetUserHistoryResponseV1';
import '@wbeme/schemas/eme/users/request/GetUserRequestV1';
import '@wbeme/schemas/eme/users/request/GetUserResponseV1';
import '@wbeme/schemas/eme/users/request/SearchUsersRequestV1';
import '@wbeme/schemas/eme/users/request/SearchUsersResponseV1';
import '@gdbots/schemas/gdbots/analytics/tracker/KeenV1';
import '@gdbots/schemas/gdbots/contexts/AppV1';
import '@gdbots/schemas/gdbots/contexts/CloudV1';
import '@gdbots/schemas/gdbots/contexts/UserAgentV1';
import '@gdbots/schemas/gdbots/forms/field/AddressFieldV1';
import '@gdbots/schemas/gdbots/forms/field/AgeFieldV1';
import '@gdbots/schemas/gdbots/forms/field/CountryFieldV1';
import '@gdbots/schemas/gdbots/forms/field/DateFieldV1';
import '@gdbots/schemas/gdbots/forms/field/DobFieldV1';
import '@gdbots/schemas/gdbots/forms/field/EmailFieldV1';
import '@gdbots/schemas/gdbots/forms/field/FacebookUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/GenderFieldV1';
import '@gdbots/schemas/gdbots/forms/field/HeightFieldV1';
import '@gdbots/schemas/gdbots/forms/field/InstagramUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/LegalFieldV1';
import '@gdbots/schemas/gdbots/forms/field/LongTextFieldV1';
import '@gdbots/schemas/gdbots/forms/field/NumberFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PhoneFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PhotoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/PinterestUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/SelectFieldV1';
import '@gdbots/schemas/gdbots/forms/field/ShortTextFieldV1';
import '@gdbots/schemas/gdbots/forms/field/SnapchatUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/StatementFieldV1';
import '@gdbots/schemas/gdbots/forms/field/TwitterUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/VideoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/WebsiteFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YesNoFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YoutubeUserFieldV1';
import '@gdbots/schemas/gdbots/forms/field/YoutubeVideoFieldV1';
import '@gdbots/schemas/gdbots/geo/AddressV1';
import '@gdbots/schemas/gdbots/ncr/command/CreateEdgeV1';
import '@gdbots/schemas/gdbots/ncr/command/DeleteEdgeV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeCreatedV1';
import '@gdbots/schemas/gdbots/ncr/event/EdgeDeletedV1';
import '@gdbots/schemas/gdbots/ncr/request/GetNodeBatchRequestV1';
import '@gdbots/schemas/gdbots/ncr/request/GetNodeBatchResponseV1';
import '@gdbots/schemas/gdbots/pbjx/EnvelopeV1';
import '@gdbots/schemas/gdbots/pbjx/command/CheckHealthV1';
import '@gdbots/schemas/gdbots/pbjx/event/EventExecutionFailedV1';
import '@gdbots/schemas/gdbots/pbjx/event/HealthCheckedV1';
import '@gdbots/schemas/gdbots/pbjx/request/EchoRequestV1';
import '@gdbots/schemas/gdbots/pbjx/request/EchoResponseV1';
import '@gdbots/schemas/gdbots/pbjx/request/RequestFailedResponseV1';

export default MessageResolver;
