<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlertEvidence implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new alertEvidence and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertEvidence {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.analyzedMessageEvidence': return new AnalyzedMessageEvidence();
                case '#microsoft.graph.security.cloudApplicationEvidence': return new CloudApplicationEvidence();
                case '#microsoft.graph.security.deviceEvidence': return new DeviceEvidence();
                case '#microsoft.graph.security.fileEvidence': return new FileEvidence();
                case '#microsoft.graph.security.ipEvidence': return new IpEvidence();
                case '#microsoft.graph.security.mailboxEvidence': return new MailboxEvidence();
                case '#microsoft.graph.security.mailClusterEvidence': return new MailClusterEvidence();
                case '#microsoft.graph.security.oauthApplicationEvidence': return new OauthApplicationEvidence();
                case '#microsoft.graph.security.processEvidence': return new ProcessEvidence();
                case '#microsoft.graph.security.registryKeyEvidence': return new RegistryKeyEvidence();
                case '#microsoft.graph.security.registryValueEvidence': return new RegistryValueEvidence();
                case '#microsoft.graph.security.securityGroupEvidence': return new SecurityGroupEvidence();
                case '#microsoft.graph.security.urlEvidence': return new UrlEvidence();
                case '#microsoft.graph.security.userEvidence': return new UserEvidence();
            }
        }
        return new AlertEvidence();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediationStatus' => fn(ParseNode $n) => $o->setRemediationStatus($n->getEnumValue(EvidenceRemediationStatus::class)),
            'remediationStatusDetails' => fn(ParseNode $n) => $o->setRemediationStatusDetails($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfEnumValues(EvidenceRole::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'verdict' => fn(ParseNode $n) => $o->setVerdict($n->getEnumValue(EvidenceVerdict::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the remediationStatus property value. The remediationStatus property
     * @return EvidenceRemediationStatus|null
    */
    public function getRemediationStatus(): ?EvidenceRemediationStatus {
        return $this->getBackingStore()->get('remediationStatus');
    }

    /**
     * Gets the remediationStatusDetails property value. The remediationStatusDetails property
     * @return string|null
    */
    public function getRemediationStatusDetails(): ?string {
        return $this->getBackingStore()->get('remediationStatusDetails');
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<EvidenceRole>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the verdict property value. The verdict property
     * @return EvidenceVerdict|null
    */
    public function getVerdict(): ?EvidenceVerdict {
        return $this->getBackingStore()->get('verdict');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('remediationStatus', $this->getRemediationStatus());
        $writer->writeStringValue('remediationStatusDetails', $this->getRemediationStatusDetails());
        $writer->writeCollectionOfEnumValues('roles', $this->getRoles());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeEnumValue('verdict', $this->getVerdict());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remediationStatus property value. The remediationStatus property
     *  @param EvidenceRemediationStatus|null $value Value to set for the remediationStatus property.
    */
    public function setRemediationStatus(?EvidenceRemediationStatus $value): void {
        $this->getBackingStore()->set('remediationStatus', $value);
    }

    /**
     * Sets the remediationStatusDetails property value. The remediationStatusDetails property
     *  @param string|null $value Value to set for the remediationStatusDetails property.
    */
    public function setRemediationStatusDetails(?string $value): void {
        $this->getBackingStore()->set('remediationStatusDetails', $value);
    }

    /**
     * Sets the roles property value. The roles property
     *  @param array<EvidenceRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the verdict property value. The verdict property
     *  @param EvidenceVerdict|null $value Value to set for the verdict property.
    */
    public function setVerdict(?EvidenceVerdict $value): void {
        $this->getBackingStore()->set('verdict', $value);
    }

}
