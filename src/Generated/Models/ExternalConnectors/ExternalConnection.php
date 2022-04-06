<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalConnection extends Entity 
{
    /** @var Configuration|null $configuration Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional. */
    private ?Configuration $configuration = null;
    
    /** @var string|null $description Description of the connection displayed in the Microsoft 365 admin center. Optional. */
    private ?string $description = null;
    
    /** @var array<ExternalGroup>|null $groups Read-only. Nullable. */
    private ?array $groups = null;
    
    /** @var array<ExternalItem>|null $items Read-only. Nullable. */
    private ?array $items = null;
    
    /** @var string|null $name The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required. */
    private ?string $name = null;
    
    /** @var array<ConnectionOperation>|null $operations Read-only. Nullable. */
    private ?array $operations = null;
    
    /** @var Schema|null $schema Read-only. Nullable. */
    private ?Schema $schema = null;
    
    /** @var ConnectionState|null $state Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue. */
    private ?ConnectionState $state = null;
    
    /**
     * Instantiates a new externalConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalConnection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExternalConnection {
        return new ExternalConnection();
    }

    /**
     * Gets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     * @return Configuration|null
    */
    public function getConfiguration(): ?Configuration {
        return $this->configuration;
    }

    /**
     * Gets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => function (self $o, ParseNode $n) { $o->setConfiguration($n->getObjectValue(Configuration::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'groups' => function (self $o, ParseNode $n) { $o->setGroups($n->getCollectionOfObjectValues(ExternalGroup::class)); },
            'items' => function (self $o, ParseNode $n) { $o->setItems($n->getCollectionOfObjectValues(ExternalItem::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfObjectValues(ConnectionOperation::class)); },
            'schema' => function (self $o, ParseNode $n) { $o->setSchema($n->getObjectValue(Schema::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(ConnectionState::class)); },
        ]);
    }

    /**
     * Gets the groups property value. Read-only. Nullable.
     * @return array<ExternalGroup>|null
    */
    public function getGroups(): ?array {
        return $this->groups;
    }

    /**
     * Gets the items property value. Read-only. Nullable.
     * @return array<ExternalItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the operations property value. Read-only. Nullable.
     * @return array<ConnectionOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the schema property value. Read-only. Nullable.
     * @return Schema|null
    */
    public function getSchema(): ?Schema {
        return $this->schema;
    }

    /**
     * Gets the state property value. Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue.
     * @return ConnectionState|null
    */
    public function getState(): ?ConnectionState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->configuration);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('groups', $this->groups);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeObjectValue('schema', $this->schema);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the configuration property value. Specifies additional application IDs that are allowed to manage the connection and to index content in the connection. Optional.
     *  @param Configuration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?Configuration $value ): void {
        $this->configuration = $value;
    }

    /**
     * Sets the description property value. Description of the connection displayed in the Microsoft 365 admin center. Optional.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the groups property value. Read-only. Nullable.
     *  @param array<ExternalGroup>|null $value Value to set for the groups property.
    */
    public function setGroups(?array $value ): void {
        $this->groups = $value;
    }

    /**
     * Sets the items property value. Read-only. Nullable.
     *  @param array<ExternalItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the name property value. The display name of the connection to be displayed in the Microsoft 365 admin center. Maximum length of 128 characters. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the operations property value. Read-only. Nullable.
     *  @param array<ConnectionOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the schema property value. Read-only. Nullable.
     *  @param Schema|null $value Value to set for the schema property.
    */
    public function setSchema(?Schema $value ): void {
        $this->schema = $value;
    }

    /**
     * Sets the state property value. Indicates the current state of the connection. Possible values are: draft, ready, obsolete, limitExceeded, unknownFutureValue.
     *  @param ConnectionState|null $value Value to set for the state property.
    */
    public function setState(?ConnectionState $value ): void {
        $this->state = $value;
    }

}
