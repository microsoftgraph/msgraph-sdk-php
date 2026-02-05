<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProcessConversationMetadata extends ProcessContentMetadataBase implements Parsable 
{
    /**
     * Instantiates a new ProcessConversationMetadata and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.processConversationMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessConversationMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessConversationMetadata {
        return new ProcessConversationMetadata();
    }

    /**
     * Gets the accessedResources property value. List of resources (for example, file URLs, web URLs) accessed during the generation of this message (relevant for bot interactions).
     * @return array<string>|null
    */
    public function getAccessedResources(): ?array {
        $val = $this->getBackingStore()->get('accessedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessedResources'");
    }

    /**
     * Gets the accessedResources_v2 property value. The accessedResources_v2 property
     * @return array<ResourceAccessDetail>|null
    */
    public function getAccessedResourcesV2(): ?array {
        $val = $this->getBackingStore()->get('accessedResources_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceAccessDetail::class);
            /** @var array<ResourceAccessDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessedResources_v2'");
    }

    /**
     * Gets the agents property value. The agents property
     * @return array<AiAgentInfo>|null
    */
    public function getAgents(): ?array {
        $val = $this->getBackingStore()->get('agents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiAgentInfo::class);
            /** @var array<AiAgentInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessedResources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAccessedResources($val);
            },
            'accessedResources_v2' => fn(ParseNode $n) => $o->setAccessedResourcesV2($n->getCollectionOfObjectValues([ResourceAccessDetail::class, 'createFromDiscriminatorValue'])),
            'agents' => fn(ParseNode $n) => $o->setAgents($n->getCollectionOfObjectValues([AiAgentInfo::class, 'createFromDiscriminatorValue'])),
            'parentMessageId' => fn(ParseNode $n) => $o->setParentMessageId($n->getStringValue()),
            'plugins' => fn(ParseNode $n) => $o->setPlugins($n->getCollectionOfObjectValues([AiInteractionPlugin::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the parentMessageId property value. Identifier of the parent message in a threaded conversation, if applicable.
     * @return string|null
    */
    public function getParentMessageId(): ?string {
        $val = $this->getBackingStore()->get('parentMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentMessageId'");
    }

    /**
     * Gets the plugins property value. List of plugins used during the generation of this message (relevant for AI/bot interactions).
     * @return array<AiInteractionPlugin>|null
    */
    public function getPlugins(): ?array {
        $val = $this->getBackingStore()->get('plugins');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AiInteractionPlugin::class);
            /** @var array<AiInteractionPlugin>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'plugins'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('accessedResources', $this->getAccessedResources());
        $writer->writeCollectionOfObjectValues('accessedResources_v2', $this->getAccessedResourcesV2());
        $writer->writeCollectionOfObjectValues('agents', $this->getAgents());
        $writer->writeStringValue('parentMessageId', $this->getParentMessageId());
        $writer->writeCollectionOfObjectValues('plugins', $this->getPlugins());
    }

    /**
     * Sets the accessedResources property value. List of resources (for example, file URLs, web URLs) accessed during the generation of this message (relevant for bot interactions).
     * @param array<string>|null $value Value to set for the accessedResources property.
    */
    public function setAccessedResources(?array $value): void {
        $this->getBackingStore()->set('accessedResources', $value);
    }

    /**
     * Sets the accessedResources_v2 property value. The accessedResources_v2 property
     * @param array<ResourceAccessDetail>|null $value Value to set for the accessedResources_v2 property.
    */
    public function setAccessedResourcesV2(?array $value): void {
        $this->getBackingStore()->set('accessedResources_v2', $value);
    }

    /**
     * Sets the agents property value. The agents property
     * @param array<AiAgentInfo>|null $value Value to set for the agents property.
    */
    public function setAgents(?array $value): void {
        $this->getBackingStore()->set('agents', $value);
    }

    /**
     * Sets the parentMessageId property value. Identifier of the parent message in a threaded conversation, if applicable.
     * @param string|null $value Value to set for the parentMessageId property.
    */
    public function setParentMessageId(?string $value): void {
        $this->getBackingStore()->set('parentMessageId', $value);
    }

    /**
     * Sets the plugins property value. List of plugins used during the generation of this message (relevant for AI/bot interactions).
     * @param array<AiInteractionPlugin>|null $value Value to set for the plugins property.
    */
    public function setPlugins(?array $value): void {
        $this->getBackingStore()->set('plugins', $value);
    }

}
