<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A representation of a script that can be run on an end-user device managed by Intune in relation to a Win32 app.
*/
class Win32LobAppScript extends MobileAppContentScript implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppScript');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppScript {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32LobAppInstallPowerShellScript': return new Win32LobAppInstallPowerShellScript();
                case '#microsoft.graph.win32LobAppUninstallPowerShellScript': return new Win32LobAppUninstallPowerShellScript();
            }
        }
        return new Win32LobAppScript();
    }

    /**
     * Gets the enforceSignatureCheck property value. Indicates whether or not to enforce a signature check when running the script. When TRUE, the script cannot be run without enforcing a signature check. When FALSE, no signature check will be enforced when running the script. Default value is FALSE.
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        $val = $this->getBackingStore()->get('enforceSignatureCheck');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforceSignatureCheck'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enforceSignatureCheck' => fn(ParseNode $n) => $o->setEnforceSignatureCheck($n->getBooleanValue()),
            'runAs32Bit' => fn(ParseNode $n) => $o->setRunAs32Bit($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the runAs32Bit property value. Indicates whether the script will run as 32-bit or 64-bit. When TRUE, the script will run as 32-bit. When FALSE, the script will run as 64-bit. Default value is FALSE.
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        $val = $this->getBackingStore()->get('runAs32Bit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAs32Bit'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enforceSignatureCheck', $this->getEnforceSignatureCheck());
        $writer->writeBooleanValue('runAs32Bit', $this->getRunAs32Bit());
    }

    /**
     * Sets the enforceSignatureCheck property value. Indicates whether or not to enforce a signature check when running the script. When TRUE, the script cannot be run without enforcing a signature check. When FALSE, no signature check will be enforced when running the script. Default value is FALSE.
     * @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value): void {
        $this->getBackingStore()->set('enforceSignatureCheck', $value);
    }

    /**
     * Sets the runAs32Bit property value. Indicates whether the script will run as 32-bit or 64-bit. When TRUE, the script will run as 32-bit. When FALSE, the script will run as 64-bit. Default value is FALSE.
     * @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value): void {
        $this->getBackingStore()->set('runAs32Bit', $value);
    }

}
