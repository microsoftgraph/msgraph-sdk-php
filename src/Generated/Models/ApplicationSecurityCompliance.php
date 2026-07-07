<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationSecurityCompliance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationSecurityCompliance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationSecurityCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationSecurityCompliance {
        return new ApplicationSecurityCompliance();
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
     * Gets the cobit property value. Indicates whether the application adheres to the Control Objectives for Information and Related Technologies (COBIT) framework.
     * @return bool|null
    */
    public function getCobit(): ?bool {
        $val = $this->getBackingStore()->get('cobit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cobit'");
    }

    /**
     * Gets the coppa property value. Indicates whether the application complies with the Children’s Online Privacy Protection Act (COPPA).
     * @return bool|null
    */
    public function getCoppa(): ?bool {
        $val = $this->getBackingStore()->get('coppa');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coppa'");
    }

    /**
     * Gets the csaStar property value. Specifies the Cloud Security Alliance (CSA) Security, Trust & Assurance Registry (STAR) certification level. The possible values are: none, attestation, certification, continuousMonitoring, cStarAssessment, selfAssessment, notSupported, unknownFutureValue.
     * @return CsaStarLevel|null
    */
    public function getCsaStar(): ?CsaStarLevel {
        $val = $this->getBackingStore()->get('csaStar');
        if (is_null($val) || $val instanceof CsaStarLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'csaStar'");
    }

    /**
     * Gets the fedRamp property value. Specifies the Federal Risk and Authorization Management Program (FedRAMP) certification level. The possible values are: none, high, liSaas, low, moderate, notSupported, unknownFutureValue.
     * @return FedRampLevel|null
    */
    public function getFedRamp(): ?FedRampLevel {
        $val = $this->getBackingStore()->get('fedRamp');
        if (is_null($val) || $val instanceof FedRampLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fedRamp'");
    }

    /**
     * Gets the ferpa property value. Indicates whether the application complies with the Family Educational Rights and Privacy Act (FERPA).
     * @return bool|null
    */
    public function getFerpa(): ?bool {
        $val = $this->getBackingStore()->get('ferpa');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ferpa'");
    }

    /**
     * Gets the ffiec property value. Indicates whether the application meets Federal Financial Institutions Examination Council (FFIEC) requirements.
     * @return bool|null
    */
    public function getFfiec(): ?bool {
        $val = $this->getBackingStore()->get('ffiec');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ffiec'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cobit' => fn(ParseNode $n) => $o->setCobit($n->getBooleanValue()),
            'coppa' => fn(ParseNode $n) => $o->setCoppa($n->getBooleanValue()),
            'csaStar' => fn(ParseNode $n) => $o->setCsaStar($n->getEnumValue(CsaStarLevel::class)),
            'fedRamp' => fn(ParseNode $n) => $o->setFedRamp($n->getEnumValue(FedRampLevel::class)),
            'ferpa' => fn(ParseNode $n) => $o->setFerpa($n->getBooleanValue()),
            'ffiec' => fn(ParseNode $n) => $o->setFfiec($n->getBooleanValue()),
            'finra' => fn(ParseNode $n) => $o->setFinra($n->getBooleanValue()),
            'fisma' => fn(ParseNode $n) => $o->setFisma($n->getBooleanValue()),
            'gaap' => fn(ParseNode $n) => $o->setGaap($n->getBooleanValue()),
            'gapp' => fn(ParseNode $n) => $o->setGapp($n->getBooleanValue()),
            'glba' => fn(ParseNode $n) => $o->setGlba($n->getBooleanValue()),
            'hipaa' => fn(ParseNode $n) => $o->setHipaa($n->getBooleanValue()),
            'hitrust' => fn(ParseNode $n) => $o->setHitrust($n->getBooleanValue()),
            'isae3402' => fn(ParseNode $n) => $o->setIsae3402($n->getBooleanValue()),
            'iso27001' => fn(ParseNode $n) => $o->setIso27001($n->getBooleanValue()),
            'iso27002' => fn(ParseNode $n) => $o->setIso27002($n->getBooleanValue()),
            'iso27017' => fn(ParseNode $n) => $o->setIso27017($n->getBooleanValue()),
            'iso27018' => fn(ParseNode $n) => $o->setIso27018($n->getBooleanValue()),
            'itar' => fn(ParseNode $n) => $o->setItar($n->getBooleanValue()),
            'jerichoForumCommandments' => fn(ParseNode $n) => $o->setJerichoForumCommandments($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pci' => fn(ParseNode $n) => $o->setPci($n->getEnumValue(PciVersion::class)),
            'privacyShield' => fn(ParseNode $n) => $o->setPrivacyShield($n->getBooleanValue()),
            'safeHarbor' => fn(ParseNode $n) => $o->setSafeHarbor($n->getBooleanValue()),
            'soc1' => fn(ParseNode $n) => $o->setSoc1($n->getBooleanValue()),
            'soc2' => fn(ParseNode $n) => $o->setSoc2($n->getBooleanValue()),
            'soc3' => fn(ParseNode $n) => $o->setSoc3($n->getBooleanValue()),
            'sox' => fn(ParseNode $n) => $o->setSox($n->getBooleanValue()),
            'sp800_53' => fn(ParseNode $n) => $o->setSp80053($n->getBooleanValue()),
            'ssae16' => fn(ParseNode $n) => $o->setSsae16($n->getBooleanValue()),
            'ustr' => fn(ParseNode $n) => $o->setUstr($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the finra property value. Indicates whether the application complies with Financial Industry Regulatory Authority (FINRA) standards.
     * @return bool|null
    */
    public function getFinra(): ?bool {
        $val = $this->getBackingStore()->get('finra');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finra'");
    }

    /**
     * Gets the fisma property value. Indicates whether the application complies with the Federal Information Security Management Act (FISMA).
     * @return bool|null
    */
    public function getFisma(): ?bool {
        $val = $this->getBackingStore()->get('fisma');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fisma'");
    }

    /**
     * Gets the gaap property value. Indicates whether the application provider adheres to Generally Accepted Accounting Principles (GAAP).
     * @return bool|null
    */
    public function getGaap(): ?bool {
        $val = $this->getBackingStore()->get('gaap');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gaap'");
    }

    /**
     * Gets the gapp property value. Indicates whether the application adheres to Generally Accepted Privacy Principles (GAPP).
     * @return bool|null
    */
    public function getGapp(): ?bool {
        $val = $this->getBackingStore()->get('gapp');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gapp'");
    }

    /**
     * Gets the glba property value. Indicates whether the application complies with the Gramm–Leach–Bliley Act (GLBA) for financial data protection.
     * @return bool|null
    */
    public function getGlba(): ?bool {
        $val = $this->getBackingStore()->get('glba');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'glba'");
    }

    /**
     * Gets the hipaa property value. Indicates whether the application complies with the Health Insurance Portability and Accountability Act (HIPAA).
     * @return bool|null
    */
    public function getHipaa(): ?bool {
        $val = $this->getBackingStore()->get('hipaa');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hipaa'");
    }

    /**
     * Gets the hitrust property value. Indicates whether the application holds HITRUST certification, demonstrating alignment with healthcare and data security standards.
     * @return bool|null
    */
    public function getHitrust(): ?bool {
        $val = $this->getBackingStore()->get('hitrust');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hitrust'");
    }

    /**
     * Gets the isae3402 property value. Indicates whether the application complies with International Standard on Assurance Engagements (ISAE) 3402 requirements.
     * @return bool|null
    */
    public function getIsae3402(): ?bool {
        $val = $this->getBackingStore()->get('isae3402');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isae3402'");
    }

    /**
     * Gets the iso27001 property value. Indicates whether the application is certified against ISO/IEC 27001 for information security management systems (ISMS).
     * @return bool|null
    */
    public function getIso27001(): ?bool {
        $val = $this->getBackingStore()->get('iso27001');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iso27001'");
    }

    /**
     * Gets the iso27002 property value. Indicates whether the application follows ISO/IEC 27002 security control best practices.
     * @return bool|null
    */
    public function getIso27002(): ?bool {
        $val = $this->getBackingStore()->get('iso27002');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iso27002'");
    }

    /**
     * Gets the iso27017 property value. Indicates whether the application complies with ISO/IEC 27017 standards for cloud security controls.
     * @return bool|null
    */
    public function getIso27017(): ?bool {
        $val = $this->getBackingStore()->get('iso27017');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iso27017'");
    }

    /**
     * Gets the iso27018 property value. Indicates whether the application complies with ISO/IEC 27018 standards for protecting personally identifiable information (PII) in cloud environments.
     * @return bool|null
    */
    public function getIso27018(): ?bool {
        $val = $this->getBackingStore()->get('iso27018');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iso27018'");
    }

    /**
     * Gets the itar property value. Indicates whether the application complies with International Traffic in Arms Regulations (ITAR).
     * @return bool|null
    */
    public function getItar(): ?bool {
        $val = $this->getBackingStore()->get('itar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itar'");
    }

    /**
     * Gets the jerichoForumCommandments property value. Indicates whether the application aligns with Jericho Forum security principles for deperimeterized environments.
     * @return bool|null
    */
    public function getJerichoForumCommandments(): ?bool {
        $val = $this->getBackingStore()->get('jerichoForumCommandments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jerichoForumCommandments'");
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
     * Gets the pci property value. Specifies the Payment Card Industry (PCI) Data Security Standard (DSS) version the application complies with. The possible values are: none, v321, v4, notSupported, unknownFutureValue.
     * @return PciVersion|null
    */
    public function getPci(): ?PciVersion {
        $val = $this->getBackingStore()->get('pci');
        if (is_null($val) || $val instanceof PciVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pci'");
    }

    /**
     * Gets the privacyShield property value. Indicates whether the application complies with the EU–U.S. Privacy Shield framework for cross-border data transfers.
     * @return bool|null
    */
    public function getPrivacyShield(): ?bool {
        $val = $this->getBackingStore()->get('privacyShield');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyShield'");
    }

    /**
     * Gets the safeHarbor property value. Indicates whether the application previously adhered to the U.S.–EU Safe Harbor data transfer framework.
     * @return bool|null
    */
    public function getSafeHarbor(): ?bool {
        $val = $this->getBackingStore()->get('safeHarbor');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safeHarbor'");
    }

    /**
     * Gets the soc1 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) one audit report.
     * @return bool|null
    */
    public function getSoc1(): ?bool {
        $val = $this->getBackingStore()->get('soc1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'soc1'");
    }

    /**
     * Gets the soc2 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) two audit report.
     * @return bool|null
    */
    public function getSoc2(): ?bool {
        $val = $this->getBackingStore()->get('soc2');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'soc2'");
    }

    /**
     * Gets the soc3 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) three audit report.
     * @return bool|null
    */
    public function getSoc3(): ?bool {
        $val = $this->getBackingStore()->get('soc3');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'soc3'");
    }

    /**
     * Gets the sox property value. Indicates whether the application complies with the Sarbanes–Oxley Act (SOX) financial reporting requirements.
     * @return bool|null
    */
    public function getSox(): ?bool {
        $val = $this->getBackingStore()->get('sox');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sox'");
    }

    /**
     * Gets the sp800_53 property value. Indicates whether the application aligns with National Institute of Standards and Technology (NIST) Special Publication 800-53 security and privacy controls.
     * @return bool|null
    */
    public function getSp80053(): ?bool {
        $val = $this->getBackingStore()->get('sp800_53');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sp800_53'");
    }

    /**
     * Gets the ssae16 property value. Indicates whether the application adheres to Statement on Standards for Attestation Engagements (SSAE) No. 16.
     * @return bool|null
    */
    public function getSsae16(): ?bool {
        $val = $this->getBackingStore()->get('ssae16');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ssae16'");
    }

    /**
     * Gets the ustr property value. Indicates whether the application complies with U.S. Trade Representative (USTR) data and trade protection requirements.
     * @return bool|null
    */
    public function getUstr(): ?bool {
        $val = $this->getBackingStore()->get('ustr');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ustr'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cobit', $this->getCobit());
        $writer->writeBooleanValue('coppa', $this->getCoppa());
        $writer->writeEnumValue('csaStar', $this->getCsaStar());
        $writer->writeEnumValue('fedRamp', $this->getFedRamp());
        $writer->writeBooleanValue('ferpa', $this->getFerpa());
        $writer->writeBooleanValue('ffiec', $this->getFfiec());
        $writer->writeBooleanValue('finra', $this->getFinra());
        $writer->writeBooleanValue('fisma', $this->getFisma());
        $writer->writeBooleanValue('gaap', $this->getGaap());
        $writer->writeBooleanValue('gapp', $this->getGapp());
        $writer->writeBooleanValue('glba', $this->getGlba());
        $writer->writeBooleanValue('hipaa', $this->getHipaa());
        $writer->writeBooleanValue('hitrust', $this->getHitrust());
        $writer->writeBooleanValue('isae3402', $this->getIsae3402());
        $writer->writeBooleanValue('iso27001', $this->getIso27001());
        $writer->writeBooleanValue('iso27002', $this->getIso27002());
        $writer->writeBooleanValue('iso27017', $this->getIso27017());
        $writer->writeBooleanValue('iso27018', $this->getIso27018());
        $writer->writeBooleanValue('itar', $this->getItar());
        $writer->writeBooleanValue('jerichoForumCommandments', $this->getJerichoForumCommandments());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('pci', $this->getPci());
        $writer->writeBooleanValue('privacyShield', $this->getPrivacyShield());
        $writer->writeBooleanValue('safeHarbor', $this->getSafeHarbor());
        $writer->writeBooleanValue('soc1', $this->getSoc1());
        $writer->writeBooleanValue('soc2', $this->getSoc2());
        $writer->writeBooleanValue('soc3', $this->getSoc3());
        $writer->writeBooleanValue('sox', $this->getSox());
        $writer->writeBooleanValue('sp800_53', $this->getSp80053());
        $writer->writeBooleanValue('ssae16', $this->getSsae16());
        $writer->writeBooleanValue('ustr', $this->getUstr());
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
     * Sets the cobit property value. Indicates whether the application adheres to the Control Objectives for Information and Related Technologies (COBIT) framework.
     * @param bool|null $value Value to set for the cobit property.
    */
    public function setCobit(?bool $value): void {
        $this->getBackingStore()->set('cobit', $value);
    }

    /**
     * Sets the coppa property value. Indicates whether the application complies with the Children’s Online Privacy Protection Act (COPPA).
     * @param bool|null $value Value to set for the coppa property.
    */
    public function setCoppa(?bool $value): void {
        $this->getBackingStore()->set('coppa', $value);
    }

    /**
     * Sets the csaStar property value. Specifies the Cloud Security Alliance (CSA) Security, Trust & Assurance Registry (STAR) certification level. The possible values are: none, attestation, certification, continuousMonitoring, cStarAssessment, selfAssessment, notSupported, unknownFutureValue.
     * @param CsaStarLevel|null $value Value to set for the csaStar property.
    */
    public function setCsaStar(?CsaStarLevel $value): void {
        $this->getBackingStore()->set('csaStar', $value);
    }

    /**
     * Sets the fedRamp property value. Specifies the Federal Risk and Authorization Management Program (FedRAMP) certification level. The possible values are: none, high, liSaas, low, moderate, notSupported, unknownFutureValue.
     * @param FedRampLevel|null $value Value to set for the fedRamp property.
    */
    public function setFedRamp(?FedRampLevel $value): void {
        $this->getBackingStore()->set('fedRamp', $value);
    }

    /**
     * Sets the ferpa property value. Indicates whether the application complies with the Family Educational Rights and Privacy Act (FERPA).
     * @param bool|null $value Value to set for the ferpa property.
    */
    public function setFerpa(?bool $value): void {
        $this->getBackingStore()->set('ferpa', $value);
    }

    /**
     * Sets the ffiec property value. Indicates whether the application meets Federal Financial Institutions Examination Council (FFIEC) requirements.
     * @param bool|null $value Value to set for the ffiec property.
    */
    public function setFfiec(?bool $value): void {
        $this->getBackingStore()->set('ffiec', $value);
    }

    /**
     * Sets the finra property value. Indicates whether the application complies with Financial Industry Regulatory Authority (FINRA) standards.
     * @param bool|null $value Value to set for the finra property.
    */
    public function setFinra(?bool $value): void {
        $this->getBackingStore()->set('finra', $value);
    }

    /**
     * Sets the fisma property value. Indicates whether the application complies with the Federal Information Security Management Act (FISMA).
     * @param bool|null $value Value to set for the fisma property.
    */
    public function setFisma(?bool $value): void {
        $this->getBackingStore()->set('fisma', $value);
    }

    /**
     * Sets the gaap property value. Indicates whether the application provider adheres to Generally Accepted Accounting Principles (GAAP).
     * @param bool|null $value Value to set for the gaap property.
    */
    public function setGaap(?bool $value): void {
        $this->getBackingStore()->set('gaap', $value);
    }

    /**
     * Sets the gapp property value. Indicates whether the application adheres to Generally Accepted Privacy Principles (GAPP).
     * @param bool|null $value Value to set for the gapp property.
    */
    public function setGapp(?bool $value): void {
        $this->getBackingStore()->set('gapp', $value);
    }

    /**
     * Sets the glba property value. Indicates whether the application complies with the Gramm–Leach–Bliley Act (GLBA) for financial data protection.
     * @param bool|null $value Value to set for the glba property.
    */
    public function setGlba(?bool $value): void {
        $this->getBackingStore()->set('glba', $value);
    }

    /**
     * Sets the hipaa property value. Indicates whether the application complies with the Health Insurance Portability and Accountability Act (HIPAA).
     * @param bool|null $value Value to set for the hipaa property.
    */
    public function setHipaa(?bool $value): void {
        $this->getBackingStore()->set('hipaa', $value);
    }

    /**
     * Sets the hitrust property value. Indicates whether the application holds HITRUST certification, demonstrating alignment with healthcare and data security standards.
     * @param bool|null $value Value to set for the hitrust property.
    */
    public function setHitrust(?bool $value): void {
        $this->getBackingStore()->set('hitrust', $value);
    }

    /**
     * Sets the isae3402 property value. Indicates whether the application complies with International Standard on Assurance Engagements (ISAE) 3402 requirements.
     * @param bool|null $value Value to set for the isae3402 property.
    */
    public function setIsae3402(?bool $value): void {
        $this->getBackingStore()->set('isae3402', $value);
    }

    /**
     * Sets the iso27001 property value. Indicates whether the application is certified against ISO/IEC 27001 for information security management systems (ISMS).
     * @param bool|null $value Value to set for the iso27001 property.
    */
    public function setIso27001(?bool $value): void {
        $this->getBackingStore()->set('iso27001', $value);
    }

    /**
     * Sets the iso27002 property value. Indicates whether the application follows ISO/IEC 27002 security control best practices.
     * @param bool|null $value Value to set for the iso27002 property.
    */
    public function setIso27002(?bool $value): void {
        $this->getBackingStore()->set('iso27002', $value);
    }

    /**
     * Sets the iso27017 property value. Indicates whether the application complies with ISO/IEC 27017 standards for cloud security controls.
     * @param bool|null $value Value to set for the iso27017 property.
    */
    public function setIso27017(?bool $value): void {
        $this->getBackingStore()->set('iso27017', $value);
    }

    /**
     * Sets the iso27018 property value. Indicates whether the application complies with ISO/IEC 27018 standards for protecting personally identifiable information (PII) in cloud environments.
     * @param bool|null $value Value to set for the iso27018 property.
    */
    public function setIso27018(?bool $value): void {
        $this->getBackingStore()->set('iso27018', $value);
    }

    /**
     * Sets the itar property value. Indicates whether the application complies with International Traffic in Arms Regulations (ITAR).
     * @param bool|null $value Value to set for the itar property.
    */
    public function setItar(?bool $value): void {
        $this->getBackingStore()->set('itar', $value);
    }

    /**
     * Sets the jerichoForumCommandments property value. Indicates whether the application aligns with Jericho Forum security principles for deperimeterized environments.
     * @param bool|null $value Value to set for the jerichoForumCommandments property.
    */
    public function setJerichoForumCommandments(?bool $value): void {
        $this->getBackingStore()->set('jerichoForumCommandments', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pci property value. Specifies the Payment Card Industry (PCI) Data Security Standard (DSS) version the application complies with. The possible values are: none, v321, v4, notSupported, unknownFutureValue.
     * @param PciVersion|null $value Value to set for the pci property.
    */
    public function setPci(?PciVersion $value): void {
        $this->getBackingStore()->set('pci', $value);
    }

    /**
     * Sets the privacyShield property value. Indicates whether the application complies with the EU–U.S. Privacy Shield framework for cross-border data transfers.
     * @param bool|null $value Value to set for the privacyShield property.
    */
    public function setPrivacyShield(?bool $value): void {
        $this->getBackingStore()->set('privacyShield', $value);
    }

    /**
     * Sets the safeHarbor property value. Indicates whether the application previously adhered to the U.S.–EU Safe Harbor data transfer framework.
     * @param bool|null $value Value to set for the safeHarbor property.
    */
    public function setSafeHarbor(?bool $value): void {
        $this->getBackingStore()->set('safeHarbor', $value);
    }

    /**
     * Sets the soc1 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) one audit report.
     * @param bool|null $value Value to set for the soc1 property.
    */
    public function setSoc1(?bool $value): void {
        $this->getBackingStore()->set('soc1', $value);
    }

    /**
     * Sets the soc2 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) two audit report.
     * @param bool|null $value Value to set for the soc2 property.
    */
    public function setSoc2(?bool $value): void {
        $this->getBackingStore()->set('soc2', $value);
    }

    /**
     * Sets the soc3 property value. Indicates whether the application provider undergoes a Service Organization Control (SOC) three audit report.
     * @param bool|null $value Value to set for the soc3 property.
    */
    public function setSoc3(?bool $value): void {
        $this->getBackingStore()->set('soc3', $value);
    }

    /**
     * Sets the sox property value. Indicates whether the application complies with the Sarbanes–Oxley Act (SOX) financial reporting requirements.
     * @param bool|null $value Value to set for the sox property.
    */
    public function setSox(?bool $value): void {
        $this->getBackingStore()->set('sox', $value);
    }

    /**
     * Sets the sp800_53 property value. Indicates whether the application aligns with National Institute of Standards and Technology (NIST) Special Publication 800-53 security and privacy controls.
     * @param bool|null $value Value to set for the sp800_53 property.
    */
    public function setSp80053(?bool $value): void {
        $this->getBackingStore()->set('sp800_53', $value);
    }

    /**
     * Sets the ssae16 property value. Indicates whether the application adheres to Statement on Standards for Attestation Engagements (SSAE) No. 16.
     * @param bool|null $value Value to set for the ssae16 property.
    */
    public function setSsae16(?bool $value): void {
        $this->getBackingStore()->set('ssae16', $value);
    }

    /**
     * Sets the ustr property value. Indicates whether the application complies with U.S. Trade Representative (USTR) data and trade protection requirements.
     * @param bool|null $value Value to set for the ustr property.
    */
    public function setUstr(?bool $value): void {
        $this->getBackingStore()->set('ustr', $value);
    }

}
