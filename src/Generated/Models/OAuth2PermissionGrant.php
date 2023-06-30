<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OAuth2PermissionGrant extends Entity implements Parsable 
{
    /**
     * Instantiates a new oAuth2PermissionGrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OAuth2PermissionGrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OAuth2PermissionGrant {
        return new OAuth2PermissionGrant();
    }

    /**
     * Gets the clientId property value. The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * Gets the consentType property value. Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
     * @return string|null
    */
    public function getConsentType(): ?string {
        $val = $this->getBackingStore()->get('consentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consentType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'consentType' => fn(ParseNode $n) => $o->setConsentType($n->getStringValue()),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principalId property value. The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        $val = $this->getBackingStore()->get('principalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalId'");
    }

    /**
     * Gets the resourceId property value. The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the scope property value. A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the oauth2PermissionScopes property of the resource service principal. Must not exceed 3850 characters in length.
     * @return string|null
    */
    public function getScope(): ?string {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('consentType', $this->getConsentType());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('scope', $this->getScope());
    }

    /**
     * Sets the clientId property value. The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the consentType property value. Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
     * @param string|null $value Value to set for the consentType property.
    */
    public function setConsentType(?string $value): void {
        $this->getBackingStore()->set('consentType', $value);
    }

    /**
     * Sets the principalId property value. The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal. Supports $filter (eq only).
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the resourceId property value. The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user. Supports $filter (eq only).
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the scope property value. A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the oauth2PermissionScopes property of the resource service principal. Must not exceed 3850 characters in length.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
