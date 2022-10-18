<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FederatedIdentityCredential extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $audiences The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Azure AD. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Azure AD in your external identity provider and has no fixed value across identity providers - you may need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
    */
    private ?array $audiences = null;
    
    /**
     * @var string|null $description The un-validated, user-provided description of the federated identity credential. It has a limit of 600 characters. Optional.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $issuer The URL of the external identity provider and must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique on the app. It has a limit of 600 characters. Required.
    */
    private ?string $issuer = null;
    
    /**
     * @var string|null $name is the unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. It is immutable once created. Required. Not nullable. Supports $filter (eq).
    */
    private ?string $name = null;
    
    /**
     * @var string|null $subject Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format, as each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Azure AD. The combination of issuer and subject must be unique on the app. It has a limit of 600 characters. Supports $filter (eq).
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new federatedIdentityCredential and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.federatedIdentityCredential');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FederatedIdentityCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FederatedIdentityCredential {
        return new FederatedIdentityCredential();
    }

    /**
     * Gets the audiences property value. The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Azure AD. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Azure AD in your external identity provider and has no fixed value across identity providers - you may need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
     * @return array<string>|null
    */
    public function getAudiences(): ?array {
        return $this->audiences;
    }

    /**
     * Gets the description property value. The un-validated, user-provided description of the federated identity credential. It has a limit of 600 characters. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audiences' => fn(ParseNode $n) => $o->setAudiences($n->getCollectionOfPrimitiveValues()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the issuer property value. The URL of the external identity provider and must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique on the app. It has a limit of 600 characters. Required.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the name property value. is the unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. It is immutable once created. Required. Not nullable. Supports $filter (eq).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the subject property value. Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format, as each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Azure AD. The combination of issuer and subject must be unique on the app. It has a limit of 600 characters. Supports $filter (eq).
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('audiences', $this->audiences);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('issuer', $this->issuer);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('subject', $this->subject);
    }

    /**
     * Sets the audiences property value. The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Azure AD. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Azure AD in your external identity provider and has no fixed value across identity providers - you may need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
     *  @param array<string>|null $value Value to set for the audiences property.
    */
    public function setAudiences(?array $value ): void {
        $this->audiences = $value;
    }

    /**
     * Sets the description property value. The un-validated, user-provided description of the federated identity credential. It has a limit of 600 characters. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the issuer property value. The URL of the external identity provider and must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique on the app. It has a limit of 600 characters. Required.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the name property value. is the unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. It is immutable once created. Required. Not nullable. Supports $filter (eq).
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the subject property value. Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format, as each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Azure AD. The combination of issuer and subject must be unique on the app. It has a limit of 600 characters. Supports $filter (eq).
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
