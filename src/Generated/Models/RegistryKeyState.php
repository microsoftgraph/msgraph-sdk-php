<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RegistryKeyState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new registryKeyState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistryKeyState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistryKeyState {
        return new RegistryKeyState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hive' => fn(ParseNode $n) => $o->setHive($n->getEnumValue(RegistryHive::class)),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'oldKey' => fn(ParseNode $n) => $o->setOldKey($n->getStringValue()),
            'oldValueData' => fn(ParseNode $n) => $o->setOldValueData($n->getStringValue()),
            'oldValueName' => fn(ParseNode $n) => $o->setOldValueName($n->getStringValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getEnumValue(RegistryOperation::class)),
            'processId' => fn(ParseNode $n) => $o->setProcessId($n->getIntegerValue()),
            'valueData' => fn(ParseNode $n) => $o->setValueData($n->getStringValue()),
            'valueName' => fn(ParseNode $n) => $o->setValueName($n->getStringValue()),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getEnumValue(RegistryValueType::class)),
        ];
    }

    /**
     * Gets the hive property value. A Windows registry hive : HKEY_CURRENT_CONFIG HKEY_CURRENT_USER HKEY_LOCAL_MACHINE/SAM HKEY_LOCAL_MACHINE/Security HKEY_LOCAL_MACHINE/Software HKEY_LOCAL_MACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     * @return RegistryHive|null
    */
    public function getHive(): ?RegistryHive {
        $val = $this->getBackingStore()->get('hive');
        if (is_null($val) || $val instanceof RegistryHive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hive'");
    }

    /**
     * Gets the key property value. Current (i.e. changed) registry key (excludes HIVE).
     * @return string|null
    */
    public function getKey(): ?string {
        $val = $this->getBackingStore()->get('key');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'key'");
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
     * Gets the oldKey property value. Previous (i.e. before changed) registry key (excludes HIVE).
     * @return string|null
    */
    public function getOldKey(): ?string {
        $val = $this->getBackingStore()->get('oldKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldKey'");
    }

    /**
     * Gets the oldValueData property value. Previous (i.e. before changed) registry key value data (contents).
     * @return string|null
    */
    public function getOldValueData(): ?string {
        $val = $this->getBackingStore()->get('oldValueData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldValueData'");
    }

    /**
     * Gets the oldValueName property value. Previous (i.e. before changed) registry key value name.
     * @return string|null
    */
    public function getOldValueName(): ?string {
        $val = $this->getBackingStore()->get('oldValueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldValueName'");
    }

    /**
     * Gets the operation property value. Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     * @return RegistryOperation|null
    */
    public function getOperation(): ?RegistryOperation {
        $val = $this->getBackingStore()->get('operation');
        if (is_null($val) || $val instanceof RegistryOperation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operation'");
    }

    /**
     * Gets the processId property value. Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
     * @return int|null
    */
    public function getProcessId(): ?int {
        $val = $this->getBackingStore()->get('processId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processId'");
    }

    /**
     * Gets the valueData property value. Current (i.e. changed) registry key value data (contents).
     * @return string|null
    */
    public function getValueData(): ?string {
        $val = $this->getBackingStore()->get('valueData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueData'");
    }

    /**
     * Gets the valueName property value. Current (i.e. changed) registry key value name
     * @return string|null
    */
    public function getValueName(): ?string {
        $val = $this->getBackingStore()->get('valueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueName'");
    }

    /**
     * Gets the valueType property value. Registry key value type REG_BINARY REG_DWORD REG_DWORD_LITTLE_ENDIAN REG_DWORD_BIG_ENDIANREG_EXPAND_SZ REG_LINK REG_MULTI_SZ REG_NONE REG_QWORD REG_QWORD_LITTLE_ENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     * @return RegistryValueType|null
    */
    public function getValueType(): ?RegistryValueType {
        $val = $this->getBackingStore()->get('valueType');
        if (is_null($val) || $val instanceof RegistryValueType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('hive', $this->getHive());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('oldKey', $this->getOldKey());
        $writer->writeStringValue('oldValueData', $this->getOldValueData());
        $writer->writeStringValue('oldValueName', $this->getOldValueName());
        $writer->writeEnumValue('operation', $this->getOperation());
        $writer->writeIntegerValue('processId', $this->getProcessId());
        $writer->writeStringValue('valueData', $this->getValueData());
        $writer->writeStringValue('valueName', $this->getValueName());
        $writer->writeEnumValue('valueType', $this->getValueType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the hive property value. A Windows registry hive : HKEY_CURRENT_CONFIG HKEY_CURRENT_USER HKEY_LOCAL_MACHINE/SAM HKEY_LOCAL_MACHINE/Security HKEY_LOCAL_MACHINE/Software HKEY_LOCAL_MACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     * @param RegistryHive|null $value Value to set for the hive property.
    */
    public function setHive(?RegistryHive $value): void {
        $this->getBackingStore()->set('hive', $value);
    }

    /**
     * Sets the key property value. Current (i.e. changed) registry key (excludes HIVE).
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the oldKey property value. Previous (i.e. before changed) registry key (excludes HIVE).
     * @param string|null $value Value to set for the oldKey property.
    */
    public function setOldKey(?string $value): void {
        $this->getBackingStore()->set('oldKey', $value);
    }

    /**
     * Sets the oldValueData property value. Previous (i.e. before changed) registry key value data (contents).
     * @param string|null $value Value to set for the oldValueData property.
    */
    public function setOldValueData(?string $value): void {
        $this->getBackingStore()->set('oldValueData', $value);
    }

    /**
     * Sets the oldValueName property value. Previous (i.e. before changed) registry key value name.
     * @param string|null $value Value to set for the oldValueName property.
    */
    public function setOldValueName(?string $value): void {
        $this->getBackingStore()->set('oldValueName', $value);
    }

    /**
     * Sets the operation property value. Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     * @param RegistryOperation|null $value Value to set for the operation property.
    */
    public function setOperation(?RegistryOperation $value): void {
        $this->getBackingStore()->set('operation', $value);
    }

    /**
     * Sets the processId property value. Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
     * @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value): void {
        $this->getBackingStore()->set('processId', $value);
    }

    /**
     * Sets the valueData property value. Current (i.e. changed) registry key value data (contents).
     * @param string|null $value Value to set for the valueData property.
    */
    public function setValueData(?string $value): void {
        $this->getBackingStore()->set('valueData', $value);
    }

    /**
     * Sets the valueName property value. Current (i.e. changed) registry key value name
     * @param string|null $value Value to set for the valueName property.
    */
    public function setValueName(?string $value): void {
        $this->getBackingStore()->set('valueName', $value);
    }

    /**
     * Sets the valueType property value. Registry key value type REG_BINARY REG_DWORD REG_DWORD_LITTLE_ENDIAN REG_DWORD_BIG_ENDIANREG_EXPAND_SZ REG_LINK REG_MULTI_SZ REG_NONE REG_QWORD REG_QWORD_LITTLE_ENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     * @param RegistryValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?RegistryValueType $value): void {
        $this->getBackingStore()->set('valueType', $value);
    }

}
