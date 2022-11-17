<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditActor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationDisplayName Name of the Application.
    */
    private ?string $applicationDisplayName = null;
    
    /**
     * @var string|null $applicationId AAD Application Id.
    */
    private ?string $applicationId = null;
    
    /**
     * @var string|null $auditActorType Actor Type.
    */
    private ?string $auditActorType = null;
    
    /**
     * @var string|null $ipAddress IPAddress.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $servicePrincipalName Service Principal Name (SPN).
    */
    private ?string $servicePrincipalName = null;
    
    /**
     * @var string|null $userId User Id.
    */
    private ?string $userId = null;
    
    /**
     * @var array<string>|null $userPermissions List of user permissions when the audit was performed.
    */
    private ?array $userPermissions = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name (UPN).
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new auditActor and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.auditActor');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditActor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditActor {
        return new AuditActor();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationDisplayName property value. Name of the Application.
     * @return string|null
    */
    public function getApplicationDisplayName(): ?string {
        return $this->applicationDisplayName;
    }

    /**
     * Gets the applicationId property value. AAD Application Id.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->applicationId;
    }

    /**
     * Gets the auditActorType property value. Actor Type.
     * @return string|null
    */
    public function getAuditActorType(): ?string {
        return $this->auditActorType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationDisplayName' => fn(ParseNode $n) => $o->setApplicationDisplayName($n->getStringValue()),
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'auditActorType' => fn(ParseNode $n) => $o->setAuditActorType($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPermissions' => fn(ParseNode $n) => $o->setUserPermissions($n->getCollectionOfPrimitiveValues()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the ipAddress property value. IPAddress.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the servicePrincipalName property value. Service Principal Name (SPN).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->servicePrincipalName;
    }

    /**
     * Gets the userId property value. User Id.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPermissions property value. List of user permissions when the audit was performed.
     * @return array<string>|null
    */
    public function getUserPermissions(): ?array {
        return $this->userPermissions;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name (UPN).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationDisplayName', $this->applicationDisplayName);
        $writer->writeStringValue('applicationId', $this->applicationId);
        $writer->writeStringValue('auditActorType', $this->auditActorType);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('servicePrincipalName', $this->servicePrincipalName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeCollectionOfPrimitiveValues('userPermissions', $this->userPermissions);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applicationDisplayName property value. Name of the Application.
     *  @param string|null $value Value to set for the applicationDisplayName property.
    */
    public function setApplicationDisplayName(?string $value ): void {
        $this->applicationDisplayName = $value;
    }

    /**
     * Sets the applicationId property value. AAD Application Id.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the auditActorType property value. Actor Type.
     *  @param string|null $value Value to set for the auditActorType property.
    */
    public function setAuditActorType(?string $value ): void {
        $this->auditActorType = $value;
    }

    /**
     * Sets the ipAddress property value. IPAddress.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the servicePrincipalName property value. Service Principal Name (SPN).
     *  @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value ): void {
        $this->servicePrincipalName = $value;
    }

    /**
     * Sets the userId property value. User Id.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPermissions property value. List of user permissions when the audit was performed.
     *  @param array<string>|null $value Value to set for the userPermissions property.
    */
    public function setUserPermissions(?array $value ): void {
        $this->userPermissions = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name (UPN).
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
