<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.wbeme.com/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'eme:solicits:command:add-note-to-submission' => 'Eme\Schemas\Solicits\Command\AddNoteToSubmissionV1',
    'eme:solicits:command:create-solicit' => 'Eme\Schemas\Solicits\Command\CreateSolicitV1',
    'eme:solicits:command:delete-solicit' => 'Eme\Schemas\Solicits\Command\DeleteSolicitV1',
    'eme:solicits:command:import-solicit' => 'Eme\Schemas\Solicits\Command\ImportSolicitV1',
    'eme:solicits:command:import-submission' => 'Eme\Schemas\Solicits\Command\ImportSubmissionV1',
    'eme:solicits:command:mark-submissions-as-read' => 'Eme\Schemas\Solicits\Command\MarkSubmissionsAsReadV1',
    'eme:solicits:command:mark-submissions-as-unread' => 'Eme\Schemas\Solicits\Command\MarkSubmissionsAsUnreadV1',
    'eme:solicits:command:publish-solicit' => 'Eme\Schemas\Solicits\Command\PublishSolicitV1',
    'eme:solicits:command:purge-submission' => 'Eme\Schemas\Solicits\Command\PurgeSubmissionV1',
    'eme:solicits:command:reject-submission' => 'Eme\Schemas\Solicits\Command\RejectSubmissionV1',
    'eme:solicits:command:send-submission' => 'Eme\Schemas\Solicits\Command\SendSubmissionV1',
    'eme:solicits:command:unpublish-solicit' => 'Eme\Schemas\Solicits\Command\UnpublishSolicitV1',
    'eme:solicits:command:update-solicit' => 'Eme\Schemas\Solicits\Command\UpdateSolicitV1',
    'eme:users:command:create-user' => 'Eme\Schemas\Users\Command\CreateUserV1',
    'eme:users:command:delete-user' => 'Eme\Schemas\Users\Command\DeleteUserV1',
    'eme:users:command:grant-roles-to-user' => 'Eme\Schemas\Users\Command\GrantRolesToUserV1',
    'eme:users:command:import-user' => 'Eme\Schemas\Users\Command\ImportUserV1',
    'eme:users:command:revoke-roles-from-user' => 'Eme\Schemas\Users\Command\RevokeRolesFromUserV1',
    'eme:users:command:update-user' => 'Eme\Schemas\Users\Command\UpdateUserV1',
    'gdbots:ncr:command:create-edge' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:delete-edge' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:pbjx:command:check-health' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
]);
