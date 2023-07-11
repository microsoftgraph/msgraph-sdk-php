<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Alert;
use Microsoft\Graph\Generated\Models\AttackSimulationRoot;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\SecureScore;
use Microsoft\Graph\Generated\Models\SecureScoreControlProfile;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Security extends Entity implements Parsable 
{
    /**
     * Instantiates a new security and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Security
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Security {
        return new Security();
    }

    /**
     * Gets the alerts property value. The alerts property
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        $val = $this->getBackingStore()->get('alerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Alert::class);
            /** @var array<Alert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts'");
    }

    /**
     * Gets the alerts_v2 property value. A collection of alerts in Microsoft 365 Defender.
     * @return array<Alert>|null
    */
    public function getAlertsV2(): ?array {
        $val = $this->getBackingStore()->get('alerts_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Alert::class);
            /** @var array<Alert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts_v2'");
    }

    /**
     * Gets the attackSimulation property value. The attackSimulation property
     * @return AttackSimulationRoot|null
    */
    public function getAttackSimulation(): ?AttackSimulationRoot {
        $val = $this->getBackingStore()->get('attackSimulation');
        if (is_null($val) || $val instanceof AttackSimulationRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attackSimulation'");
    }

    /**
     * Gets the cases property value. The cases property
     * @return CasesRoot|null
    */
    public function getCases(): ?CasesRoot {
        $val = $this->getBackingStore()->get('cases');
        if (is_null($val) || $val instanceof CasesRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cases'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'alerts_v2' => fn(ParseNode $n) => $o->setAlertsV2($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'attackSimulation' => fn(ParseNode $n) => $o->setAttackSimulation($n->getObjectValue([AttackSimulationRoot::class, 'createFromDiscriminatorValue'])),
            'cases' => fn(ParseNode $n) => $o->setCases($n->getObjectValue([CasesRoot::class, 'createFromDiscriminatorValue'])),
            'incidents' => fn(ParseNode $n) => $o->setIncidents($n->getCollectionOfObjectValues([Incident::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'secureScoreControlProfiles' => fn(ParseNode $n) => $o->setSecureScoreControlProfiles($n->getCollectionOfObjectValues([SecureScoreControlProfile::class, 'createFromDiscriminatorValue'])),
            'secureScores' => fn(ParseNode $n) => $o->setSecureScores($n->getCollectionOfObjectValues([SecureScore::class, 'createFromDiscriminatorValue'])),
            'threatIntelligence' => fn(ParseNode $n) => $o->setThreatIntelligence($n->getObjectValue([ThreatIntelligence::class, 'createFromDiscriminatorValue'])),
            'triggers' => fn(ParseNode $n) => $o->setTriggers($n->getObjectValue([TriggersRoot::class, 'createFromDiscriminatorValue'])),
            'triggerTypes' => fn(ParseNode $n) => $o->setTriggerTypes($n->getObjectValue([TriggerTypesRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the incidents property value. A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
     * @return array<Incident>|null
    */
    public function getIncidents(): ?array {
        $val = $this->getBackingStore()->get('incidents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Incident::class);
            /** @var array<Incident>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidents'");
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
     * Gets the secureScoreControlProfiles property value. The secureScoreControlProfiles property
     * @return array<SecureScoreControlProfile>|null
    */
    public function getSecureScoreControlProfiles(): ?array {
        $val = $this->getBackingStore()->get('secureScoreControlProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecureScoreControlProfile::class);
            /** @var array<SecureScoreControlProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureScoreControlProfiles'");
    }

    /**
     * Gets the secureScores property value. The secureScores property
     * @return array<SecureScore>|null
    */
    public function getSecureScores(): ?array {
        $val = $this->getBackingStore()->get('secureScores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecureScore::class);
            /** @var array<SecureScore>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureScores'");
    }

    /**
     * Gets the threatIntelligence property value. The threatIntelligence property
     * @return ThreatIntelligence|null
    */
    public function getThreatIntelligence(): ?ThreatIntelligence {
        $val = $this->getBackingStore()->get('threatIntelligence');
        if (is_null($val) || $val instanceof ThreatIntelligence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatIntelligence'");
    }

    /**
     * Gets the triggers property value. The triggers property
     * @return TriggersRoot|null
    */
    public function getTriggers(): ?TriggersRoot {
        $val = $this->getBackingStore()->get('triggers');
        if (is_null($val) || $val instanceof TriggersRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'triggers'");
    }

    /**
     * Gets the triggerTypes property value. The triggerTypes property
     * @return TriggerTypesRoot|null
    */
    public function getTriggerTypes(): ?TriggerTypesRoot {
        $val = $this->getBackingStore()->get('triggerTypes');
        if (is_null($val) || $val instanceof TriggerTypesRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'triggerTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeCollectionOfObjectValues('alerts_v2', $this->getAlertsV2());
        $writer->writeObjectValue('attackSimulation', $this->getAttackSimulation());
        $writer->writeObjectValue('cases', $this->getCases());
        $writer->writeCollectionOfObjectValues('incidents', $this->getIncidents());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('secureScoreControlProfiles', $this->getSecureScoreControlProfiles());
        $writer->writeCollectionOfObjectValues('secureScores', $this->getSecureScores());
        $writer->writeObjectValue('threatIntelligence', $this->getThreatIntelligence());
        $writer->writeObjectValue('triggers', $this->getTriggers());
        $writer->writeObjectValue('triggerTypes', $this->getTriggerTypes());
    }

    /**
     * Sets the alerts property value. The alerts property
     * @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the alerts_v2 property value. A collection of alerts in Microsoft 365 Defender.
     * @param array<Alert>|null $value Value to set for the alerts_v2 property.
    */
    public function setAlertsV2(?array $value): void {
        $this->getBackingStore()->set('alerts_v2', $value);
    }

    /**
     * Sets the attackSimulation property value. The attackSimulation property
     * @param AttackSimulationRoot|null $value Value to set for the attackSimulation property.
    */
    public function setAttackSimulation(?AttackSimulationRoot $value): void {
        $this->getBackingStore()->set('attackSimulation', $value);
    }

    /**
     * Sets the cases property value. The cases property
     * @param CasesRoot|null $value Value to set for the cases property.
    */
    public function setCases(?CasesRoot $value): void {
        $this->getBackingStore()->set('cases', $value);
    }

    /**
     * Sets the incidents property value. A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
     * @param array<Incident>|null $value Value to set for the incidents property.
    */
    public function setIncidents(?array $value): void {
        $this->getBackingStore()->set('incidents', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the secureScoreControlProfiles property value. The secureScoreControlProfiles property
     * @param array<SecureScoreControlProfile>|null $value Value to set for the secureScoreControlProfiles property.
    */
    public function setSecureScoreControlProfiles(?array $value): void {
        $this->getBackingStore()->set('secureScoreControlProfiles', $value);
    }

    /**
     * Sets the secureScores property value. The secureScores property
     * @param array<SecureScore>|null $value Value to set for the secureScores property.
    */
    public function setSecureScores(?array $value): void {
        $this->getBackingStore()->set('secureScores', $value);
    }

    /**
     * Sets the threatIntelligence property value. The threatIntelligence property
     * @param ThreatIntelligence|null $value Value to set for the threatIntelligence property.
    */
    public function setThreatIntelligence(?ThreatIntelligence $value): void {
        $this->getBackingStore()->set('threatIntelligence', $value);
    }

    /**
     * Sets the triggers property value. The triggers property
     * @param TriggersRoot|null $value Value to set for the triggers property.
    */
    public function setTriggers(?TriggersRoot $value): void {
        $this->getBackingStore()->set('triggers', $value);
    }

    /**
     * Sets the triggerTypes property value. The triggerTypes property
     * @param TriggerTypesRoot|null $value Value to set for the triggerTypes property.
    */
    public function setTriggerTypes(?TriggerTypesRoot $value): void {
        $this->getBackingStore()->set('triggerTypes', $value);
    }

}
