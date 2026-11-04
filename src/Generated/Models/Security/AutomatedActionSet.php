<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AutomatedActionSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AutomatedActionSet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomatedActionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomatedActionSet {
        return new AutomatedActionSet();
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
     * Gets the allowFiles property value. File actions that allow files identified by file hash columns in the hunting-query results.
     * @return array<FileAction>|null
    */
    public function getAllowFiles(): ?array {
        $val = $this->getBackingStore()->get('allowFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileAction::class);
            /** @var array<FileAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowFiles'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockFiles property value. File actions that block files identified by file hash columns in the hunting-query results.
     * @return array<FileAction>|null
    */
    public function getBlockFiles(): ?array {
        $val = $this->getBackingStore()->get('blockFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileAction::class);
            /** @var array<FileAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockFiles'");
    }

    /**
     * Gets the collectInvestigationPackages property value. Device actions that collect investigation packages from devices identified in the hunting-query results.
     * @return array<DeviceAction>|null
    */
    public function getCollectInvestigationPackages(): ?array {
        $val = $this->getBackingStore()->get('collectInvestigationPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAction::class);
            /** @var array<DeviceAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collectInvestigationPackages'");
    }

    /**
     * Gets the disableUsers property value. Account actions that disable users identified by account SID columns in the hunting-query results.
     * @return array<AccountSidAction>|null
    */
    public function getDisableUsers(): ?array {
        $val = $this->getBackingStore()->get('disableUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccountSidAction::class);
            /** @var array<AccountSidAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowFiles' => fn(ParseNode $n) => $o->setAllowFiles($n->getCollectionOfObjectValues([FileAction::class, 'createFromDiscriminatorValue'])),
            'blockFiles' => fn(ParseNode $n) => $o->setBlockFiles($n->getCollectionOfObjectValues([FileAction::class, 'createFromDiscriminatorValue'])),
            'collectInvestigationPackages' => fn(ParseNode $n) => $o->setCollectInvestigationPackages($n->getCollectionOfObjectValues([DeviceAction::class, 'createFromDiscriminatorValue'])),
            'disableUsers' => fn(ParseNode $n) => $o->setDisableUsers($n->getCollectionOfObjectValues([AccountSidAction::class, 'createFromDiscriminatorValue'])),
            'forceUserPasswordResets' => fn(ParseNode $n) => $o->setForceUserPasswordResets($n->getCollectionOfObjectValues([AccountSidAction::class, 'createFromDiscriminatorValue'])),
            'hardDeleteEmails' => fn(ParseNode $n) => $o->setHardDeleteEmails($n->getCollectionOfObjectValues([EmailAction::class, 'createFromDiscriminatorValue'])),
            'initiateInvestigations' => fn(ParseNode $n) => $o->setInitiateInvestigations($n->getCollectionOfObjectValues([DeviceAction::class, 'createFromDiscriminatorValue'])),
            'isolateDevices' => fn(ParseNode $n) => $o->setIsolateDevices($n->getCollectionOfObjectValues([IsolateDeviceAction::class, 'createFromDiscriminatorValue'])),
            'markUsersAsCompromised' => fn(ParseNode $n) => $o->setMarkUsersAsCompromised($n->getCollectionOfObjectValues([AccountObjectIdAction::class, 'createFromDiscriminatorValue'])),
            'moveEmailsToDeletedItems' => fn(ParseNode $n) => $o->setMoveEmailsToDeletedItems($n->getCollectionOfObjectValues([EmailAction::class, 'createFromDiscriminatorValue'])),
            'moveEmailsToInbox' => fn(ParseNode $n) => $o->setMoveEmailsToInbox($n->getCollectionOfObjectValues([EmailAction::class, 'createFromDiscriminatorValue'])),
            'moveEmailsToJunk' => fn(ParseNode $n) => $o->setMoveEmailsToJunk($n->getCollectionOfObjectValues([EmailAction::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictAppExecutions' => fn(ParseNode $n) => $o->setRestrictAppExecutions($n->getCollectionOfObjectValues([DeviceAction::class, 'createFromDiscriminatorValue'])),
            'runAntivirusScans' => fn(ParseNode $n) => $o->setRunAntivirusScans($n->getCollectionOfObjectValues([DeviceAction::class, 'createFromDiscriminatorValue'])),
            'softDeleteEmails' => fn(ParseNode $n) => $o->setSoftDeleteEmails($n->getCollectionOfObjectValues([EmailAction::class, 'createFromDiscriminatorValue'])),
            'stopAndQuarantineFiles' => fn(ParseNode $n) => $o->setStopAndQuarantineFiles($n->getCollectionOfObjectValues([StopAndQuarantineFileAction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the forceUserPasswordResets property value. Account actions that force password resets for users identified by account SID columns in the hunting-query results.
     * @return array<AccountSidAction>|null
    */
    public function getForceUserPasswordResets(): ?array {
        $val = $this->getBackingStore()->get('forceUserPasswordResets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccountSidAction::class);
            /** @var array<AccountSidAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forceUserPasswordResets'");
    }

    /**
     * Gets the hardDeleteEmails property value. Email actions that permanently delete messages identified in the hunting-query results.
     * @return array<EmailAction>|null
    */
    public function getHardDeleteEmails(): ?array {
        $val = $this->getBackingStore()->get('hardDeleteEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAction::class);
            /** @var array<EmailAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardDeleteEmails'");
    }

    /**
     * Gets the initiateInvestigations property value. Device actions that initiate investigations on devices identified in the hunting-query results.
     * @return array<DeviceAction>|null
    */
    public function getInitiateInvestigations(): ?array {
        $val = $this->getBackingStore()->get('initiateInvestigations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAction::class);
            /** @var array<DeviceAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiateInvestigations'");
    }

    /**
     * Gets the isolateDevices property value. Device actions that isolate devices identified in the hunting-query results.
     * @return array<IsolateDeviceAction>|null
    */
    public function getIsolateDevices(): ?array {
        $val = $this->getBackingStore()->get('isolateDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IsolateDeviceAction::class);
            /** @var array<IsolateDeviceAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isolateDevices'");
    }

    /**
     * Gets the markUsersAsCompromised property value. Account actions that mark users as compromised when they're identified by Microsoft Entra object ID columns in the hunting-query results.
     * @return array<AccountObjectIdAction>|null
    */
    public function getMarkUsersAsCompromised(): ?array {
        $val = $this->getBackingStore()->get('markUsersAsCompromised');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccountObjectIdAction::class);
            /** @var array<AccountObjectIdAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'markUsersAsCompromised'");
    }

    /**
     * Gets the moveEmailsToDeletedItems property value. Email actions that move messages identified in the hunting-query results to Deleted Items.
     * @return array<EmailAction>|null
    */
    public function getMoveEmailsToDeletedItems(): ?array {
        $val = $this->getBackingStore()->get('moveEmailsToDeletedItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAction::class);
            /** @var array<EmailAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moveEmailsToDeletedItems'");
    }

    /**
     * Gets the moveEmailsToInbox property value. Email actions that move messages identified in the hunting-query results to the Inbox.
     * @return array<EmailAction>|null
    */
    public function getMoveEmailsToInbox(): ?array {
        $val = $this->getBackingStore()->get('moveEmailsToInbox');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAction::class);
            /** @var array<EmailAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moveEmailsToInbox'");
    }

    /**
     * Gets the moveEmailsToJunk property value. Email actions that move messages identified in the hunting-query results to Junk Email.
     * @return array<EmailAction>|null
    */
    public function getMoveEmailsToJunk(): ?array {
        $val = $this->getBackingStore()->get('moveEmailsToJunk');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAction::class);
            /** @var array<EmailAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moveEmailsToJunk'");
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
     * Gets the restrictAppExecutions property value. Device actions that restrict app execution on devices identified in the hunting-query results.
     * @return array<DeviceAction>|null
    */
    public function getRestrictAppExecutions(): ?array {
        $val = $this->getBackingStore()->get('restrictAppExecutions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAction::class);
            /** @var array<DeviceAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictAppExecutions'");
    }

    /**
     * Gets the runAntivirusScans property value. Device actions that run antivirus scans on devices identified in the hunting-query results.
     * @return array<DeviceAction>|null
    */
    public function getRunAntivirusScans(): ?array {
        $val = $this->getBackingStore()->get('runAntivirusScans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAction::class);
            /** @var array<DeviceAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAntivirusScans'");
    }

    /**
     * Gets the softDeleteEmails property value. Email actions that soft-delete messages identified in the hunting-query results.
     * @return array<EmailAction>|null
    */
    public function getSoftDeleteEmails(): ?array {
        $val = $this->getBackingStore()->get('softDeleteEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAction::class);
            /** @var array<EmailAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softDeleteEmails'");
    }

    /**
     * Gets the stopAndQuarantineFiles property value. File actions that stop running files and quarantine them on devices identified in the hunting-query results.
     * @return array<StopAndQuarantineFileAction>|null
    */
    public function getStopAndQuarantineFiles(): ?array {
        $val = $this->getBackingStore()->get('stopAndQuarantineFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StopAndQuarantineFileAction::class);
            /** @var array<StopAndQuarantineFileAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stopAndQuarantineFiles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowFiles', $this->getAllowFiles());
        $writer->writeCollectionOfObjectValues('blockFiles', $this->getBlockFiles());
        $writer->writeCollectionOfObjectValues('collectInvestigationPackages', $this->getCollectInvestigationPackages());
        $writer->writeCollectionOfObjectValues('disableUsers', $this->getDisableUsers());
        $writer->writeCollectionOfObjectValues('forceUserPasswordResets', $this->getForceUserPasswordResets());
        $writer->writeCollectionOfObjectValues('hardDeleteEmails', $this->getHardDeleteEmails());
        $writer->writeCollectionOfObjectValues('initiateInvestigations', $this->getInitiateInvestigations());
        $writer->writeCollectionOfObjectValues('isolateDevices', $this->getIsolateDevices());
        $writer->writeCollectionOfObjectValues('markUsersAsCompromised', $this->getMarkUsersAsCompromised());
        $writer->writeCollectionOfObjectValues('moveEmailsToDeletedItems', $this->getMoveEmailsToDeletedItems());
        $writer->writeCollectionOfObjectValues('moveEmailsToInbox', $this->getMoveEmailsToInbox());
        $writer->writeCollectionOfObjectValues('moveEmailsToJunk', $this->getMoveEmailsToJunk());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('restrictAppExecutions', $this->getRestrictAppExecutions());
        $writer->writeCollectionOfObjectValues('runAntivirusScans', $this->getRunAntivirusScans());
        $writer->writeCollectionOfObjectValues('softDeleteEmails', $this->getSoftDeleteEmails());
        $writer->writeCollectionOfObjectValues('stopAndQuarantineFiles', $this->getStopAndQuarantineFiles());
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
     * Sets the allowFiles property value. File actions that allow files identified by file hash columns in the hunting-query results.
     * @param array<FileAction>|null $value Value to set for the allowFiles property.
    */
    public function setAllowFiles(?array $value): void {
        $this->getBackingStore()->set('allowFiles', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockFiles property value. File actions that block files identified by file hash columns in the hunting-query results.
     * @param array<FileAction>|null $value Value to set for the blockFiles property.
    */
    public function setBlockFiles(?array $value): void {
        $this->getBackingStore()->set('blockFiles', $value);
    }

    /**
     * Sets the collectInvestigationPackages property value. Device actions that collect investigation packages from devices identified in the hunting-query results.
     * @param array<DeviceAction>|null $value Value to set for the collectInvestigationPackages property.
    */
    public function setCollectInvestigationPackages(?array $value): void {
        $this->getBackingStore()->set('collectInvestigationPackages', $value);
    }

    /**
     * Sets the disableUsers property value. Account actions that disable users identified by account SID columns in the hunting-query results.
     * @param array<AccountSidAction>|null $value Value to set for the disableUsers property.
    */
    public function setDisableUsers(?array $value): void {
        $this->getBackingStore()->set('disableUsers', $value);
    }

    /**
     * Sets the forceUserPasswordResets property value. Account actions that force password resets for users identified by account SID columns in the hunting-query results.
     * @param array<AccountSidAction>|null $value Value to set for the forceUserPasswordResets property.
    */
    public function setForceUserPasswordResets(?array $value): void {
        $this->getBackingStore()->set('forceUserPasswordResets', $value);
    }

    /**
     * Sets the hardDeleteEmails property value. Email actions that permanently delete messages identified in the hunting-query results.
     * @param array<EmailAction>|null $value Value to set for the hardDeleteEmails property.
    */
    public function setHardDeleteEmails(?array $value): void {
        $this->getBackingStore()->set('hardDeleteEmails', $value);
    }

    /**
     * Sets the initiateInvestigations property value. Device actions that initiate investigations on devices identified in the hunting-query results.
     * @param array<DeviceAction>|null $value Value to set for the initiateInvestigations property.
    */
    public function setInitiateInvestigations(?array $value): void {
        $this->getBackingStore()->set('initiateInvestigations', $value);
    }

    /**
     * Sets the isolateDevices property value. Device actions that isolate devices identified in the hunting-query results.
     * @param array<IsolateDeviceAction>|null $value Value to set for the isolateDevices property.
    */
    public function setIsolateDevices(?array $value): void {
        $this->getBackingStore()->set('isolateDevices', $value);
    }

    /**
     * Sets the markUsersAsCompromised property value. Account actions that mark users as compromised when they're identified by Microsoft Entra object ID columns in the hunting-query results.
     * @param array<AccountObjectIdAction>|null $value Value to set for the markUsersAsCompromised property.
    */
    public function setMarkUsersAsCompromised(?array $value): void {
        $this->getBackingStore()->set('markUsersAsCompromised', $value);
    }

    /**
     * Sets the moveEmailsToDeletedItems property value. Email actions that move messages identified in the hunting-query results to Deleted Items.
     * @param array<EmailAction>|null $value Value to set for the moveEmailsToDeletedItems property.
    */
    public function setMoveEmailsToDeletedItems(?array $value): void {
        $this->getBackingStore()->set('moveEmailsToDeletedItems', $value);
    }

    /**
     * Sets the moveEmailsToInbox property value. Email actions that move messages identified in the hunting-query results to the Inbox.
     * @param array<EmailAction>|null $value Value to set for the moveEmailsToInbox property.
    */
    public function setMoveEmailsToInbox(?array $value): void {
        $this->getBackingStore()->set('moveEmailsToInbox', $value);
    }

    /**
     * Sets the moveEmailsToJunk property value. Email actions that move messages identified in the hunting-query results to Junk Email.
     * @param array<EmailAction>|null $value Value to set for the moveEmailsToJunk property.
    */
    public function setMoveEmailsToJunk(?array $value): void {
        $this->getBackingStore()->set('moveEmailsToJunk', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restrictAppExecutions property value. Device actions that restrict app execution on devices identified in the hunting-query results.
     * @param array<DeviceAction>|null $value Value to set for the restrictAppExecutions property.
    */
    public function setRestrictAppExecutions(?array $value): void {
        $this->getBackingStore()->set('restrictAppExecutions', $value);
    }

    /**
     * Sets the runAntivirusScans property value. Device actions that run antivirus scans on devices identified in the hunting-query results.
     * @param array<DeviceAction>|null $value Value to set for the runAntivirusScans property.
    */
    public function setRunAntivirusScans(?array $value): void {
        $this->getBackingStore()->set('runAntivirusScans', $value);
    }

    /**
     * Sets the softDeleteEmails property value. Email actions that soft-delete messages identified in the hunting-query results.
     * @param array<EmailAction>|null $value Value to set for the softDeleteEmails property.
    */
    public function setSoftDeleteEmails(?array $value): void {
        $this->getBackingStore()->set('softDeleteEmails', $value);
    }

    /**
     * Sets the stopAndQuarantineFiles property value. File actions that stop running files and quarantine them on devices identified in the hunting-query results.
     * @param array<StopAndQuarantineFileAction>|null $value Value to set for the stopAndQuarantineFiles property.
    */
    public function setStopAndQuarantineFiles(?array $value): void {
        $this->getBackingStore()->set('stopAndQuarantineFiles', $value);
    }

}
