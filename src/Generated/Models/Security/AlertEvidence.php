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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
                case '#microsoft.graph.security.amazonResourceEvidence': return new AmazonResourceEvidence();
                case '#microsoft.graph.security.analyzedMessageEvidence': return new AnalyzedMessageEvidence();
                case '#microsoft.graph.security.azureResourceEvidence': return new AzureResourceEvidence();
                case '#microsoft.graph.security.blobContainerEvidence': return new BlobContainerEvidence();
                case '#microsoft.graph.security.blobEvidence': return new BlobEvidence();
                case '#microsoft.graph.security.cloudApplicationEvidence': return new CloudApplicationEvidence();
                case '#microsoft.graph.security.containerEvidence': return new ContainerEvidence();
                case '#microsoft.graph.security.containerImageEvidence': return new ContainerImageEvidence();
                case '#microsoft.graph.security.containerRegistryEvidence': return new ContainerRegistryEvidence();
                case '#microsoft.graph.security.deviceEvidence': return new DeviceEvidence();
                case '#microsoft.graph.security.fileEvidence': return new FileEvidence();
                case '#microsoft.graph.security.googleCloudResourceEvidence': return new GoogleCloudResourceEvidence();
                case '#microsoft.graph.security.ipEvidence': return new IpEvidence();
                case '#microsoft.graph.security.kubernetesClusterEvidence': return new KubernetesClusterEvidence();
                case '#microsoft.graph.security.kubernetesControllerEvidence': return new KubernetesControllerEvidence();
                case '#microsoft.graph.security.kubernetesNamespaceEvidence': return new KubernetesNamespaceEvidence();
                case '#microsoft.graph.security.kubernetesPodEvidence': return new KubernetesPodEvidence();
                case '#microsoft.graph.security.kubernetesServiceAccountEvidence': return new KubernetesServiceAccountEvidence();
                case '#microsoft.graph.security.kubernetesServiceEvidence': return new KubernetesServiceEvidence();
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the detailedRoles property value. Detailed description of the entity role/s in an alert. Values are free-form.
     * @return array<string>|null
    */
    public function getDetailedRoles(): ?array {
        $val = $this->getBackingStore()->get('detailedRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detailedRoles'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'detailedRoles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDetailedRoles($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediationStatus' => fn(ParseNode $n) => $o->setRemediationStatus($n->getEnumValue(EvidenceRemediationStatus::class)),
            'remediationStatusDetails' => fn(ParseNode $n) => $o->setRemediationStatusDetails($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfEnumValues(EvidenceRole::class)),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'verdict' => fn(ParseNode $n) => $o->setVerdict($n->getEnumValue(EvidenceVerdict::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the remediationStatus property value. The remediationStatus property
     * @return EvidenceRemediationStatus|null
    */
    public function getRemediationStatus(): ?EvidenceRemediationStatus {
        $val = $this->getBackingStore()->get('remediationStatus');
        if (is_null($val) || $val instanceof EvidenceRemediationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationStatus'");
    }

    /**
     * Gets the remediationStatusDetails property value. Details about the remediation status.
     * @return string|null
    */
    public function getRemediationStatusDetails(): ?string {
        $val = $this->getBackingStore()->get('remediationStatusDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationStatusDetails'");
    }

    /**
     * Gets the roles property value. The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @return array<EvidenceRole>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EvidenceRole::class);
            /** @var array<EvidenceRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Gets the tags property value. Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the verdict property value. The verdict property
     * @return EvidenceVerdict|null
    */
    public function getVerdict(): ?EvidenceVerdict {
        $val = $this->getBackingStore()->get('verdict');
        if (is_null($val) || $val instanceof EvidenceVerdict) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verdict'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfPrimitiveValues('detailedRoles', $this->getDetailedRoles());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('remediationStatus', $this->getRemediationStatus());
        $writer->writeStringValue('remediationStatusDetails', $this->getRemediationStatusDetails());
        $writer->writeCollectionOfEnumValues('roles', $this->getRoles());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeEnumValue('verdict', $this->getVerdict());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the detailedRoles property value. Detailed description of the entity role/s in an alert. Values are free-form.
     * @param array<string>|null $value Value to set for the detailedRoles property.
    */
    public function setDetailedRoles(?array $value): void {
        $this->getBackingStore()->set('detailedRoles', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remediationStatus property value. The remediationStatus property
     * @param EvidenceRemediationStatus|null $value Value to set for the remediationStatus property.
    */
    public function setRemediationStatus(?EvidenceRemediationStatus $value): void {
        $this->getBackingStore()->set('remediationStatus', $value);
    }

    /**
     * Sets the remediationStatusDetails property value. Details about the remediation status.
     * @param string|null $value Value to set for the remediationStatusDetails property.
    */
    public function setRemediationStatusDetails(?string $value): void {
        $this->getBackingStore()->set('remediationStatusDetails', $value);
    }

    /**
     * Sets the roles property value. The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @param array<EvidenceRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the tags property value. Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the verdict property value. The verdict property
     * @param EvidenceVerdict|null $value Value to set for the verdict property.
    */
    public function setVerdict(?EvidenceVerdict $value): void {
        $this->getBackingStore()->set('verdict', $value);
    }

}
