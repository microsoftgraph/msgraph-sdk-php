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

class Security extends Entity implements Parsable 
{
    /**
     * Instantiates a new Security and sets the default values.
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
        return $this->getBackingStore()->get('alerts');
    }

    /**
     * Gets the attackSimulation property value. The attackSimulation property
     * @return AttackSimulationRoot|null
    */
    public function getAttackSimulation(): ?AttackSimulationRoot {
        return $this->getBackingStore()->get('attackSimulation');
    }

    /**
     * Gets the cases property value. The cases property
     * @return CasesRoot|null
    */
    public function getCases(): ?CasesRoot {
        return $this->getBackingStore()->get('cases');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'attackSimulation' => fn(ParseNode $n) => $o->setAttackSimulation($n->getObjectValue([AttackSimulationRoot::class, 'createFromDiscriminatorValue'])),
            'cases' => fn(ParseNode $n) => $o->setCases($n->getObjectValue([CasesRoot::class, 'createFromDiscriminatorValue'])),
            'secureScoreControlProfiles' => fn(ParseNode $n) => $o->setSecureScoreControlProfiles($n->getCollectionOfObjectValues([SecureScoreControlProfile::class, 'createFromDiscriminatorValue'])),
            'secureScores' => fn(ParseNode $n) => $o->setSecureScores($n->getCollectionOfObjectValues([SecureScore::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the secureScoreControlProfiles property value. The secureScoreControlProfiles property
     * @return array<SecureScoreControlProfile>|null
    */
    public function getSecureScoreControlProfiles(): ?array {
        return $this->getBackingStore()->get('secureScoreControlProfiles');
    }

    /**
     * Gets the secureScores property value. The secureScores property
     * @return array<SecureScore>|null
    */
    public function getSecureScores(): ?array {
        return $this->getBackingStore()->get('secureScores');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeObjectValue('attackSimulation', $this->getAttackSimulation());
        $writer->writeObjectValue('cases', $this->getCases());
        $writer->writeCollectionOfObjectValues('secureScoreControlProfiles', $this->getSecureScoreControlProfiles());
        $writer->writeCollectionOfObjectValues('secureScores', $this->getSecureScores());
    }

    /**
     * Sets the alerts property value. The alerts property
     *  @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the attackSimulation property value. The attackSimulation property
     *  @param AttackSimulationRoot|null $value Value to set for the attackSimulation property.
    */
    public function setAttackSimulation(?AttackSimulationRoot $value): void {
        $this->getBackingStore()->set('attackSimulation', $value);
    }

    /**
     * Sets the cases property value. The cases property
     *  @param CasesRoot|null $value Value to set for the cases property.
    */
    public function setCases(?CasesRoot $value): void {
        $this->getBackingStore()->set('cases', $value);
    }

    /**
     * Sets the secureScoreControlProfiles property value. The secureScoreControlProfiles property
     *  @param array<SecureScoreControlProfile>|null $value Value to set for the secureScoreControlProfiles property.
    */
    public function setSecureScoreControlProfiles(?array $value): void {
        $this->getBackingStore()->set('secureScoreControlProfiles', $value);
    }

    /**
     * Sets the secureScores property value. The secureScores property
     *  @param array<SecureScore>|null $value Value to set for the secureScores property.
    */
    public function setSecureScores(?array $value): void {
        $this->getBackingStore()->set('secureScores', $value);
    }

}
