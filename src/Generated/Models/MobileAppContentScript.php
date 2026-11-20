<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for a script associated with amobileLobApp entity.
*/
class MobileAppContentScript extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppContentScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppContentScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppContentScript {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32LobAppInstallPowerShellScript': return new Win32LobAppInstallPowerShellScript();
                case '#microsoft.graph.win32LobAppScript': return new Win32LobAppScript();
                case '#microsoft.graph.win32LobAppUninstallPowerShellScript': return new Win32LobAppUninstallPowerShellScript();
            }
        }
        return new MobileAppContentScript();
    }

    /**
     * Gets the content property value. The content of the script. This is a Base64-encoded representation of the script's original content. The original content (before Base64 encoding) has a maximum size limit of 100KB.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the displayName property value. The display name for the script.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(MobileAppContentScriptState::class)),
        ]);
    }

    /**
     * Gets the state property value. A list of possible script lifecycle states.
     * @return MobileAppContentScriptState|null
    */
    public function getState(): ?MobileAppContentScriptState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof MobileAppContentScriptState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the content property value. The content of the script. This is a Base64-encoded representation of the script's original content. The original content (before Base64 encoding) has a maximum size limit of 100KB.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the displayName property value. The display name for the script.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the state property value. A list of possible script lifecycle states.
     * @param MobileAppContentScriptState|null $value Value to set for the state property.
    */
    public function setState(?MobileAppContentScriptState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
