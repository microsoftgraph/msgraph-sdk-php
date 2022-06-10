<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistryKeyState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RegistryHive|null $hive A Windows registry hive : HKEY_CURRENT_CONFIG HKEY_CURRENT_USER HKEY_LOCAL_MACHINE/SAM HKEY_LOCAL_MACHINE/Security HKEY_LOCAL_MACHINE/Software HKEY_LOCAL_MACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
    */
    private ?RegistryHive $hive = null;
    
    /**
     * @var string|null $key Current (i.e. changed) registry key (excludes HIVE).
    */
    private ?string $key = null;
    
    /**
     * @var string|null $oldKey Previous (i.e. before changed) registry key (excludes HIVE).
    */
    private ?string $oldKey = null;
    
    /**
     * @var string|null $oldValueData Previous (i.e. before changed) registry key value data (contents).
    */
    private ?string $oldValueData = null;
    
    /**
     * @var string|null $oldValueName Previous (i.e. before changed) registry key value name.
    */
    private ?string $oldValueName = null;
    
    /**
     * @var RegistryOperation|null $operation Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
    */
    private ?RegistryOperation $operation = null;
    
    /**
     * @var int|null $processId Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
    */
    private ?int $processId = null;
    
    /**
     * @var string|null $valueData Current (i.e. changed) registry key value data (contents).
    */
    private ?string $valueData = null;
    
    /**
     * @var string|null $valueName Current (i.e. changed) registry key value name
    */
    private ?string $valueName = null;
    
    /**
     * @var RegistryValueType|null $valueType Registry key value type REG_BINARY REG_DWORD REG_DWORD_LITTLE_ENDIAN REG_DWORD_BIG_ENDIANREG_EXPAND_SZ REG_LINK REG_MULTI_SZ REG_NONE REG_QWORD REG_QWORD_LITTLE_ENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
    */
    private ?RegistryValueType $valueType = null;
    
    /**
     * Instantiates a new registryKeyState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hive' => function (ParseNode $n) use ($o) { $o->setHive($n->getEnumValue(RegistryHive::class)); },
            'key' => function (ParseNode $n) use ($o) { $o->setKey($n->getStringValue()); },
            'oldKey' => function (ParseNode $n) use ($o) { $o->setOldKey($n->getStringValue()); },
            'oldValueData' => function (ParseNode $n) use ($o) { $o->setOldValueData($n->getStringValue()); },
            'oldValueName' => function (ParseNode $n) use ($o) { $o->setOldValueName($n->getStringValue()); },
            'operation' => function (ParseNode $n) use ($o) { $o->setOperation($n->getEnumValue(RegistryOperation::class)); },
            'processId' => function (ParseNode $n) use ($o) { $o->setProcessId($n->getIntegerValue()); },
            'valueData' => function (ParseNode $n) use ($o) { $o->setValueData($n->getStringValue()); },
            'valueName' => function (ParseNode $n) use ($o) { $o->setValueName($n->getStringValue()); },
            'valueType' => function (ParseNode $n) use ($o) { $o->setValueType($n->getEnumValue(RegistryValueType::class)); },
        ];
    }

    /**
     * Gets the hive property value. A Windows registry hive : HKEY_CURRENT_CONFIG HKEY_CURRENT_USER HKEY_LOCAL_MACHINE/SAM HKEY_LOCAL_MACHINE/Security HKEY_LOCAL_MACHINE/Software HKEY_LOCAL_MACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     * @return RegistryHive|null
    */
    public function getHive(): ?RegistryHive {
        return $this->hive;
    }

    /**
     * Gets the key property value. Current (i.e. changed) registry key (excludes HIVE).
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the oldKey property value. Previous (i.e. before changed) registry key (excludes HIVE).
     * @return string|null
    */
    public function getOldKey(): ?string {
        return $this->oldKey;
    }

    /**
     * Gets the oldValueData property value. Previous (i.e. before changed) registry key value data (contents).
     * @return string|null
    */
    public function getOldValueData(): ?string {
        return $this->oldValueData;
    }

    /**
     * Gets the oldValueName property value. Previous (i.e. before changed) registry key value name.
     * @return string|null
    */
    public function getOldValueName(): ?string {
        return $this->oldValueName;
    }

    /**
     * Gets the operation property value. Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     * @return RegistryOperation|null
    */
    public function getOperation(): ?RegistryOperation {
        return $this->operation;
    }

    /**
     * Gets the processId property value. Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
     * @return int|null
    */
    public function getProcessId(): ?int {
        return $this->processId;
    }

    /**
     * Gets the valueData property value. Current (i.e. changed) registry key value data (contents).
     * @return string|null
    */
    public function getValueData(): ?string {
        return $this->valueData;
    }

    /**
     * Gets the valueName property value. Current (i.e. changed) registry key value name
     * @return string|null
    */
    public function getValueName(): ?string {
        return $this->valueName;
    }

    /**
     * Gets the valueType property value. Registry key value type REG_BINARY REG_DWORD REG_DWORD_LITTLE_ENDIAN REG_DWORD_BIG_ENDIANREG_EXPAND_SZ REG_LINK REG_MULTI_SZ REG_NONE REG_QWORD REG_QWORD_LITTLE_ENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     * @return RegistryValueType|null
    */
    public function getValueType(): ?RegistryValueType {
        return $this->valueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('hive', $this->hive);
        $writer->writeStringValue('key', $this->key);
        $writer->writeStringValue('oldKey', $this->oldKey);
        $writer->writeStringValue('oldValueData', $this->oldValueData);
        $writer->writeStringValue('oldValueName', $this->oldValueName);
        $writer->writeEnumValue('operation', $this->operation);
        $writer->writeIntegerValue('processId', $this->processId);
        $writer->writeStringValue('valueData', $this->valueData);
        $writer->writeStringValue('valueName', $this->valueName);
        $writer->writeEnumValue('valueType', $this->valueType);
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
     * Sets the hive property value. A Windows registry hive : HKEY_CURRENT_CONFIG HKEY_CURRENT_USER HKEY_LOCAL_MACHINE/SAM HKEY_LOCAL_MACHINE/Security HKEY_LOCAL_MACHINE/Software HKEY_LOCAL_MACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
     *  @param RegistryHive|null $value Value to set for the hive property.
    */
    public function setHive(?RegistryHive $value ): void {
        $this->hive = $value;
    }

    /**
     * Sets the key property value. Current (i.e. changed) registry key (excludes HIVE).
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the oldKey property value. Previous (i.e. before changed) registry key (excludes HIVE).
     *  @param string|null $value Value to set for the oldKey property.
    */
    public function setOldKey(?string $value ): void {
        $this->oldKey = $value;
    }

    /**
     * Sets the oldValueData property value. Previous (i.e. before changed) registry key value data (contents).
     *  @param string|null $value Value to set for the oldValueData property.
    */
    public function setOldValueData(?string $value ): void {
        $this->oldValueData = $value;
    }

    /**
     * Sets the oldValueName property value. Previous (i.e. before changed) registry key value name.
     *  @param string|null $value Value to set for the oldValueName property.
    */
    public function setOldValueName(?string $value ): void {
        $this->oldValueName = $value;
    }

    /**
     * Sets the operation property value. Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
     *  @param RegistryOperation|null $value Value to set for the operation property.
    */
    public function setOperation(?RegistryOperation $value ): void {
        $this->operation = $value;
    }

    /**
     * Sets the processId property value. Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
     *  @param int|null $value Value to set for the processId property.
    */
    public function setProcessId(?int $value ): void {
        $this->processId = $value;
    }

    /**
     * Sets the valueData property value. Current (i.e. changed) registry key value data (contents).
     *  @param string|null $value Value to set for the valueData property.
    */
    public function setValueData(?string $value ): void {
        $this->valueData = $value;
    }

    /**
     * Sets the valueName property value. Current (i.e. changed) registry key value name
     *  @param string|null $value Value to set for the valueName property.
    */
    public function setValueName(?string $value ): void {
        $this->valueName = $value;
    }

    /**
     * Sets the valueType property value. Registry key value type REG_BINARY REG_DWORD REG_DWORD_LITTLE_ENDIAN REG_DWORD_BIG_ENDIANREG_EXPAND_SZ REG_LINK REG_MULTI_SZ REG_NONE REG_QWORD REG_QWORD_LITTLE_ENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
     *  @param RegistryValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?RegistryValueType $value ): void {
        $this->valueType = $value;
    }

}
