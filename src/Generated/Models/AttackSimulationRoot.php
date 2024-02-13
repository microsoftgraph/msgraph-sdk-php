<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AttackSimulationRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AttackSimulationRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationRoot {
        return new AttackSimulationRoot();
    }

    /**
     * Gets the endUserNotifications property value. Represents an end user's notification for an attack simulation training.
     * @return array<EndUserNotification>|null
    */
    public function getEndUserNotifications(): ?array {
        $val = $this->getBackingStore()->get('endUserNotifications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EndUserNotification::class);
            /** @var array<EndUserNotification>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endUserNotifications'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endUserNotifications' => fn(ParseNode $n) => $o->setEndUserNotifications($n->getCollectionOfObjectValues([EndUserNotification::class, 'createFromDiscriminatorValue'])),
            'landingPages' => fn(ParseNode $n) => $o->setLandingPages($n->getCollectionOfObjectValues([LandingPage::class, 'createFromDiscriminatorValue'])),
            'loginPages' => fn(ParseNode $n) => $o->setLoginPages($n->getCollectionOfObjectValues([LoginPage::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([AttackSimulationOperation::class, 'createFromDiscriminatorValue'])),
            'payloads' => fn(ParseNode $n) => $o->setPayloads($n->getCollectionOfObjectValues([Payload::class, 'createFromDiscriminatorValue'])),
            'simulationAutomations' => fn(ParseNode $n) => $o->setSimulationAutomations($n->getCollectionOfObjectValues([SimulationAutomation::class, 'createFromDiscriminatorValue'])),
            'simulations' => fn(ParseNode $n) => $o->setSimulations($n->getCollectionOfObjectValues([Simulation::class, 'createFromDiscriminatorValue'])),
            'trainings' => fn(ParseNode $n) => $o->setTrainings($n->getCollectionOfObjectValues([Training::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the landingPages property value. Represents an attack simulation training landing page.
     * @return array<LandingPage>|null
    */
    public function getLandingPages(): ?array {
        $val = $this->getBackingStore()->get('landingPages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LandingPage::class);
            /** @var array<LandingPage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'landingPages'");
    }

    /**
     * Gets the loginPages property value. Represents an attack simulation training login page.
     * @return array<LoginPage>|null
    */
    public function getLoginPages(): ?array {
        $val = $this->getBackingStore()->get('loginPages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LoginPage::class);
            /** @var array<LoginPage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginPages'");
    }

    /**
     * Gets the operations property value. Represents an attack simulation training operation.
     * @return array<AttackSimulationOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttackSimulationOperation::class);
            /** @var array<AttackSimulationOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the payloads property value. Represents an attack simulation training campaign payload in a tenant.
     * @return array<Payload>|null
    */
    public function getPayloads(): ?array {
        $val = $this->getBackingStore()->get('payloads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Payload::class);
            /** @var array<Payload>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloads'");
    }

    /**
     * Gets the simulationAutomations property value. Represents simulation automation created to run on a tenant.
     * @return array<SimulationAutomation>|null
    */
    public function getSimulationAutomations(): ?array {
        $val = $this->getBackingStore()->get('simulationAutomations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SimulationAutomation::class);
            /** @var array<SimulationAutomation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationAutomations'");
    }

    /**
     * Gets the simulations property value. Represents an attack simulation training campaign in a tenant.
     * @return array<Simulation>|null
    */
    public function getSimulations(): ?array {
        $val = $this->getBackingStore()->get('simulations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Simulation::class);
            /** @var array<Simulation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulations'");
    }

    /**
     * Gets the trainings property value. Represents details about attack simulation trainings.
     * @return array<Training>|null
    */
    public function getTrainings(): ?array {
        $val = $this->getBackingStore()->get('trainings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Training::class);
            /** @var array<Training>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('endUserNotifications', $this->getEndUserNotifications());
        $writer->writeCollectionOfObjectValues('landingPages', $this->getLandingPages());
        $writer->writeCollectionOfObjectValues('loginPages', $this->getLoginPages());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('payloads', $this->getPayloads());
        $writer->writeCollectionOfObjectValues('simulationAutomations', $this->getSimulationAutomations());
        $writer->writeCollectionOfObjectValues('simulations', $this->getSimulations());
        $writer->writeCollectionOfObjectValues('trainings', $this->getTrainings());
    }

    /**
     * Sets the endUserNotifications property value. Represents an end user's notification for an attack simulation training.
     * @param array<EndUserNotification>|null $value Value to set for the endUserNotifications property.
    */
    public function setEndUserNotifications(?array $value): void {
        $this->getBackingStore()->set('endUserNotifications', $value);
    }

    /**
     * Sets the landingPages property value. Represents an attack simulation training landing page.
     * @param array<LandingPage>|null $value Value to set for the landingPages property.
    */
    public function setLandingPages(?array $value): void {
        $this->getBackingStore()->set('landingPages', $value);
    }

    /**
     * Sets the loginPages property value. Represents an attack simulation training login page.
     * @param array<LoginPage>|null $value Value to set for the loginPages property.
    */
    public function setLoginPages(?array $value): void {
        $this->getBackingStore()->set('loginPages', $value);
    }

    /**
     * Sets the operations property value. Represents an attack simulation training operation.
     * @param array<AttackSimulationOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the payloads property value. Represents an attack simulation training campaign payload in a tenant.
     * @param array<Payload>|null $value Value to set for the payloads property.
    */
    public function setPayloads(?array $value): void {
        $this->getBackingStore()->set('payloads', $value);
    }

    /**
     * Sets the simulationAutomations property value. Represents simulation automation created to run on a tenant.
     * @param array<SimulationAutomation>|null $value Value to set for the simulationAutomations property.
    */
    public function setSimulationAutomations(?array $value): void {
        $this->getBackingStore()->set('simulationAutomations', $value);
    }

    /**
     * Sets the simulations property value. Represents an attack simulation training campaign in a tenant.
     * @param array<Simulation>|null $value Value to set for the simulations property.
    */
    public function setSimulations(?array $value): void {
        $this->getBackingStore()->set('simulations', $value);
    }

    /**
     * Sets the trainings property value. Represents details about attack simulation trainings.
     * @param array<Training>|null $value Value to set for the trainings property.
    */
    public function setTrainings(?array $value): void {
        $this->getBackingStore()->set('trainings', $value);
    }

}
