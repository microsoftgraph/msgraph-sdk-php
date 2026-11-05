<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new FileAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileAction {
        return new FileAction();
    }

    /**
     * Gets the deviceGroupNames property value. Names of the device groups where the file action applies.
     * @return array<string>|null
    */
    public function getDeviceGroupNames(): ?array {
        $val = $this->getBackingStore()->get('deviceGroupNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGroupNames'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceGroupNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDeviceGroupNames($val);
            },
            'sha1Column' => fn(ParseNode $n) => $o->setSha1Column($n->getStringValue()),
            'sha256Column' => fn(ParseNode $n) => $o->setSha256Column($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sha1Column property value. Name of the hunting-query result column that contains the SHA-1 hash of the targeted file.
     * @return string|null
    */
    public function getSha1Column(): ?string {
        $val = $this->getBackingStore()->get('sha1Column');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1Column'");
    }

    /**
     * Gets the sha256Column property value. Name of the hunting-query result column that contains the SHA-256 hash of the targeted file.
     * @return string|null
    */
    public function getSha256Column(): ?string {
        $val = $this->getBackingStore()->get('sha256Column');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256Column'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('deviceGroupNames', $this->getDeviceGroupNames());
        $writer->writeStringValue('sha1Column', $this->getSha1Column());
        $writer->writeStringValue('sha256Column', $this->getSha256Column());
    }

    /**
     * Sets the deviceGroupNames property value. Names of the device groups where the file action applies.
     * @param array<string>|null $value Value to set for the deviceGroupNames property.
    */
    public function setDeviceGroupNames(?array $value): void {
        $this->getBackingStore()->set('deviceGroupNames', $value);
    }

    /**
     * Sets the sha1Column property value. Name of the hunting-query result column that contains the SHA-1 hash of the targeted file.
     * @param string|null $value Value to set for the sha1Column property.
    */
    public function setSha1Column(?string $value): void {
        $this->getBackingStore()->set('sha1Column', $value);
    }

    /**
     * Sets the sha256Column property value. Name of the hunting-query result column that contains the SHA-256 hash of the targeted file.
     * @param string|null $value Value to set for the sha256Column property.
    */
    public function setSha256Column(?string $value): void {
        $this->getBackingStore()->set('sha256Column', $value);
    }

}
