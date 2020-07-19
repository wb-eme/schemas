// @link http://schemas.wbeme.com/json-schema/eme/forms/request/search-submissions-request/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import Format from '@gdbots/pbj/enums/Format';
import GdbotsPbjxRequestV1Mixin from '@gdbots/schemas/gdbots/pbjx/mixin/request/RequestV1Mixin';
import Gender from '@gdbots/schemas/gdbots/common/enums/Gender';
import Message from '@gdbots/pbj/Message';
import Schema from '@gdbots/pbj/Schema';
import SearchEventsSort from '@gdbots/schemas/gdbots/pbjx/enums/SearchEventsSort';
import SexualOrientation from '@gdbots/schemas/gdbots/common/enums/SexualOrientation';
import T from '@gdbots/pbj/types';

export default class SearchSubmissionsRequestV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        Fb.create('request_id', T.UuidType.create())
          .required()
          .build(),
        Fb.create('occurred_at', T.MicrotimeType.create())
          .build(),
        /*
         * Multi-tenant apps can use this field to track the tenant id.
         */
        Fb.create('ctx_tenant_id', T.StringType.create())
          .pattern('^[\\w\\/\\.:-]+$')
          .build(),
        /*
         * The "ctx_retries" field is used to keep track of how many attempts were
         * made to handle this request. In some cases, the service or transport
         * that handles the request may be down or over capacity and is being retried.
         */
        Fb.create('ctx_retries', T.TinyIntType.create())
          .build(),
        Fb.create('ctx_causator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_correlator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('ctx_user_ref', T.MessageRefType.create())
          .build(),
        /*
         * The "ctx_app" refers to the application used to make the request. This is
         * different from ctx_ua (user_agent) because the agent used (Safari, Firefox)
         * is not necessarily the app used (cms, iOS app, website)
         */
        Fb.create('ctx_app', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::app',
          ])
          .build(),
        /*
         * The "ctx_cloud" is set by the server making the request and is generally
         * only used internally for tracking and performance monitoring.
         */
        Fb.create('ctx_cloud', T.MessageType.create())
          .anyOfCuries([
            'gdbots:contexts::cloud',
          ])
          .build(),
        Fb.create('ctx_ip', T.StringType.create())
          .format(Format.IPV4)
          .overridable(true)
          .build(),
        Fb.create('ctx_ipv6', T.StringType.create())
          .format(Format.IPV6)
          .overridable(true)
          .build(),
        Fb.create('ctx_ua', T.TextType.create())
          .overridable(true)
          .build(),
        /*
         * Field names to dereference, this serves as a hint to the server and is not
         * necessarily gauranteed since authorization, availability, etc. are determined
         * by the server not the client.
         */
        Fb.create('derefs', T.StringType.create())
          .asASet()
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('q', T.TextType.create())
          .maxLength(2000)
          .build(),
        /*
         * The number of results to return.
         */
        Fb.create('count', T.TinyIntType.create())
          .withDefault(25)
          .build(),
        Fb.create('page', T.TinyIntType.create())
          .min(1)
          .withDefault(1)
          .build(),
        /*
         * A cursor is a string (normally base64 encoded) which marks a specific item in a list of data.
         * When cursor is present it should be used instead of "page".
         */
        Fb.create('cursor', T.StringType.create())
          .build(),
        Fb.create('sort', T.StringEnumType.create())
          .withDefault("relevance")
          .classProto(SearchEventsSort)
          .build(),
        Fb.create('occurred_after', T.DateTimeType.create())
          .build(),
        Fb.create('occurred_before', T.DateTimeType.create())
          .build(),
        /*
         * The fields that are being queried as determined by parsing the "q" field.
         */
        Fb.create('fields_used', T.StringType.create())
          .asASet()
          .pattern('^[\\w\\.-]+$')
          .build(),
        Fb.create('parsed_query_json', T.TextType.create())
          .build(),
        Fb.create('form_ref', T.NodeRefType.create())
          .build(),
        Fb.create('ids', T.TimeUuidType.create())
          .asASet()
          .build(),
        Fb.create('cf_filters', T.MessageType.create())
          .asAList()
          .anyOfCuries([
            'gdbots:common::search-filter',
          ])
          .build(),
        Fb.create('first_name', T.StringType.create())
          .build(),
        Fb.create('last_name', T.StringType.create())
          .build(),
        Fb.create('email', T.StringType.create())
          .format(Format.EMAIL)
          .build(),
        Fb.create('email_domain', T.StringType.create())
          .format(Format.HOSTNAME)
          .build(),
        Fb.create('address', T.MessageType.create())
          .anyOfCuries([
            'gdbots:geo::address',
          ])
          .build(),
        Fb.create('age_min', T.TinyIntType.create())
          .max(120)
          .build(),
        Fb.create('age_max', T.TinyIntType.create())
          .max(120)
          .build(),
        Fb.create('height_min', T.TinyIntType.create())
          .max(120)
          .build(),
        Fb.create('height_max', T.TinyIntType.create())
          .max(120)
          .build(),
        Fb.create('gender', T.IntEnumType.create())
          .classProto(Gender)
          .build(),
        Fb.create('sexual_orientation', T.StringEnumType.create())
          .classProto(SexualOrientation)
          .build(),
        Fb.create('has_notes', T.TrinaryType.create())
          .build(),
        Fb.create('is_blocked', T.TrinaryType.create())
          .build(),
        Fb.create('is_read', T.TrinaryType.create())
          .build(),
        Fb.create('last_read_after', T.DateTimeType.create())
          .build(),
        Fb.create('last_read_before', T.DateTimeType.create())
          .build(),
        Fb.create('last_read_by_ref', T.MessageRefType.create())
          .build(),
        Fb.create('is_verified', T.TrinaryType.create())
          .build(),
        Fb.create('is_rejected', T.TrinaryType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = SearchSubmissionsRequestV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:eme:forms:request:search-submissions-request:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'eme:forms:request:search-submissions-request';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'eme:forms:request:search-submissions-request:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:pbjx:mixin:request:v1',
  'gdbots:pbjx:mixin:request',
  'gdbots:pbjx:mixin:search-events-request:v1',
  'gdbots:pbjx:mixin:search-events-request',
  'gdbots:analytics:mixin:tracked-message:v1',
  'gdbots:analytics:mixin:tracked-message',
];

GdbotsPbjxRequestV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
