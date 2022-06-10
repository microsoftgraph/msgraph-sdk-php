<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessUsers implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludeGroups Group IDs excluded from scope of policy.
    */
    private ?array $excludeGroups = null;
    
    /**
     * @var array<string>|null $excludeRoles Role IDs excluded from scope of policy.
    */
    private ?array $excludeRoles = null;
    
    /**
     * @var array<string>|null $excludeUsers User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
    */
    private ?array $excludeUsers = null;
    
    /**
     * @var array<string>|null $includeGroups Group IDs in scope of policy unless explicitly excluded, or All.
    */
    private ?array $includeGroups = null;
    
    /**
     * @var array<string>|null $includeRoles Role IDs in scope of policy unless explicitly excluded, or All.
    */
    private ?array $includeRoles = null;
    
    /**
     * @var array<string>|null $includeUsers User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
    */
    private ?array $includeUsers = null;
    
    /**
     * Instantiates a new conditionalAccessUsers and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessUsers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessUsers {
        return new ConditionalAccessUsers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeGroups property value. Group IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->excludeGroups;
    }

    /**
     * Gets the excludeRoles property value. Role IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeRoles(): ?array {
        return $this->excludeRoles;
    }

    /**
     * Gets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getExcludeUsers(): ?array {
        return $this->excludeUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeGroups' => function (ParseNode $n) use ($o) { $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()); },
            'excludeRoles' => function (ParseNode $n) use ($o) { $o->setExcludeRoles($n->getCollectionOfPrimitiveValues()); },
            'excludeUsers' => function (ParseNode $n) use ($o) { $o->setExcludeUsers($n->getCollectionOfPrimitiveValues()); },
            'includeGroups' => function (ParseNode $n) use ($o) { $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()); },
            'includeRoles' => function (ParseNode $n) use ($o) { $o->setIncludeRoles($n->getCollectionOfPrimitiveValues()); },
            'includeUsers' => function (ParseNode $n) use ($o) { $o->setIncludeUsers($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded, or All.
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->includeGroups;
    }

    /**
     * Gets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded, or All.
     * @return array<string>|null
    */
    public function getIncludeRoles(): ?array {
        return $this->includeRoles;
    }

    /**
     * Gets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
     * @return array<string>|null
    */
    public function getIncludeUsers(): ?array {
        return $this->includeUsers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->excludeGroups);
        $writer->writeCollectionOfPrimitiveValues('excludeRoles', $this->excludeRoles);
        $writer->writeCollectionOfPrimitiveValues('excludeUsers', $this->excludeUsers);
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->includeGroups);
        $writer->writeCollectionOfPrimitiveValues('includeRoles', $this->includeRoles);
        $writer->writeCollectionOfPrimitiveValues('includeUsers', $this->includeUsers);
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
     * Sets the excludeGroups property value. Group IDs excluded from scope of policy.
     *  @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value ): void {
        $this->excludeGroups = $value;
    }

    /**
     * Sets the excludeRoles property value. Role IDs excluded from scope of policy.
     *  @param array<string>|null $value Value to set for the excludeRoles property.
    */
    public function setExcludeRoles(?array $value ): void {
        $this->excludeRoles = $value;
    }

    /**
     * Sets the excludeUsers property value. User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     *  @param array<string>|null $value Value to set for the excludeUsers property.
    */
    public function setExcludeUsers(?array $value ): void {
        $this->excludeUsers = $value;
    }

    /**
     * Sets the includeGroups property value. Group IDs in scope of policy unless explicitly excluded, or All.
     *  @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value ): void {
        $this->includeGroups = $value;
    }

    /**
     * Sets the includeRoles property value. Role IDs in scope of policy unless explicitly excluded, or All.
     *  @param array<string>|null $value Value to set for the includeRoles property.
    */
    public function setIncludeRoles(?array $value ): void {
        $this->includeRoles = $value;
    }

    /**
     * Sets the includeUsers property value. User IDs in scope of policy unless explicitly excluded, or None or All or GuestsOrExternalUsers.
     *  @param array<string>|null $value Value to set for the includeUsers property.
    */
    public function setIncludeUsers(?array $value ): void {
        $this->includeUsers = $value;
    }

}
