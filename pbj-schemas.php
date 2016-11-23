<?php

/**
 * DO NOT EDIT THIS FILE as it will be overwritten by Pbj Compiler process.
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * This file has been auto-generated by the Pbj Compiler.
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'eme:accounts:node:account' => 'Eme\Schemas\Accounts\Node\AccountV1',
    'eme:accounts:request:get-account-request' => 'Eme\Schemas\Accounts\Request\GetAccountRequestV1',
    'eme:accounts:request:get-account-response' => 'Eme\Schemas\Accounts\Request\GetAccountResponseV1',
    'eme:solicits:command:import-submission' => 'Eme\Schemas\Solicits\Command\ImportSubmissionV1',
    'eme:solicits:command:send-submission' => 'Eme\Schemas\Solicits\Command\SendSubmissionV1',
    'eme:solicits:edge:submissions' => 'Eme\Schemas\Solicits\Edge\SubmissionsV1',
    'eme:solicits:event:submission-received' => 'Eme\Schemas\Solicits\Event\SubmissionReceivedV1',
    'eme:solicits:node:solicit' => 'Eme\Schemas\Solicits\Node\SolicitV1',
    'eme:solicits:request:search-submissions-request' => 'Eme\Schemas\Solicits\Request\SearchSubmissionsRequestV1',
    'eme:solicits:request:search-submissions-response' => 'Eme\Schemas\Solicits\Request\SearchSubmissionsResponseV1',
    'gdbots:ncr:command:create-edge' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:delete-edge' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:event:edge-created' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:pbjx:event:event-execution-failed' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:request:echo-request' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
    'gdbots:analytics:tracker:keen' => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
    'eme:solicits:request:get-submission-history-request' => 'Eme\Schemas\Solicits\Request\GetSubmissionHistoryRequestV1',
    'eme:solicits:request:get-submission-history-response' => 'Eme\Schemas\Solicits\Request\GetSubmissionHistoryResponseV1',
    'eme:users:node:user' => 'Eme\Schemas\Users\Node\UserV1',
    'gdbots:pbjx:command:check-health' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
    'gdbots:pbjx:event:health-checked' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
    'eme:users:request:get-user-batch-request' => 'Eme\Schemas\Users\Request\GetUserBatchRequestV1',
    'eme:users:request:get-user-batch-response' => 'Eme\Schemas\Users\Request\GetUserBatchResponseV1',
    'eme:users:request:get-user-request' => 'Eme\Schemas\Users\Request\GetUserRequestV1',
    'eme:users:request:get-user-response' => 'Eme\Schemas\Users\Request\GetUserResponseV1',
    'eme:users:command:create-user' => 'Eme\Schemas\Users\Command\CreateUserV1',
    'eme:users:command:delete-user' => 'Eme\Schemas\Users\Command\DeleteUserV1',
    'eme:users:command:index-user-batch' => 'Eme\Schemas\Users\Command\IndexUserBatchV1',
    'eme:users:command:index-user' => 'Eme\Schemas\Users\Command\IndexUserV1',
    'eme:users:command:update-user' => 'Eme\Schemas\Users\Command\UpdateUserV1',
    'eme:users:event:user-created' => 'Eme\Schemas\Users\Event\UserCreatedV1',
    'eme:users:event:user-deleted' => 'Eme\Schemas\Users\Event\UserDeletedV1',
    'eme:users:event:user-updated' => 'Eme\Schemas\Users\Event\UserUpdatedV1',
    'eme:users:request:get-user-history-request' => 'Eme\Schemas\Users\Request\GetUserHistoryRequestV1',
    'eme:users:request:get-user-history-response' => 'Eme\Schemas\Users\Request\GetUserHistoryResponseV1',
    'eme:users:request:search-users-request' => 'Eme\Schemas\Users\Request\SearchUsersRequestV1',
    'eme:users:request:search-users-response' => 'Eme\Schemas\Users\Request\SearchUsersResponseV1',
    'gdbots:contexts::app' => 'Gdbots\Schemas\Contexts\AppV1',
    'gdbots:contexts::cloud' => 'Gdbots\Schemas\Contexts\CloudV1',
    'gdbots:contexts::user-agent' => 'Gdbots\Schemas\Contexts\UserAgentV1',
    'gdbots:geo::address' => 'Gdbots\Schemas\Geo\AddressV1',
    'gdbots:pbjx::envelope' => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
]);
