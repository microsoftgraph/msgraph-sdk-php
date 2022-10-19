<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedPermissionClassification extends Entity implements Parsable 
{
    /**
     * @var PermissionClassificationType|null $classification The classification value being given. Possible value: low. Does not support $filter.
    */
    private ?PermissionClassificationType $classification = null;
    
    /**
     * @var string|null $permissionId The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Does not support $filter.
    */
    private ?string $permissionId = null;
    
    /**
     * @var string|null $permissionName The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Does not support $filter.
    */
    private ?string $permissionName = null;
    
    /**
     * Instantiates a new delegatedPermissionClassification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.delegatedPermissionClassification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedPermissionClassification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedPermissionClassification {
        return new DelegatedPermissionClassification();
    }

    /**
     * Gets the classification property value. The classification value being given. Possible value: low. Does not support $filter.
     * @return PermissionClassificationType|null
    */
    public function getClassification(): ?PermissionClassificationType {
        return $this->classification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(PermissionClassificationType::class)),
            'permissionId' => fn(ParseNode $n) => $o->setPermissionId($n->getStringValue()),
            'permissionName' => fn(ParseNode $n) => $o->setPermissionName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionId property value. The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Does not support $filter.
     * @return string|null
    */
    public function getPermissionId(): ?string {
        return $this->permissionId;
    }

    /**
     * Gets the permissionName property value. The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Does not support $filter.
     * @return string|null
    */
    public function getPermissionName(): ?string {
        return $this->permissionName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->classification);
        $writer->writeStringValue('permissionId', $this->permissionId);
        $writer->writeStringValue('permissionName', $this->permissionName);
    }

    /**
     * Sets the classification property value. The classification value being given. Possible value: low. Does not support $filter.
     *  @param PermissionClassificationType|null $value Value to set for the classification property.
    */
    public function setClassification(?PermissionClassificationType $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the permissionId property value. The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Does not support $filter.
     *  @param string|null $value Value to set for the permissionId property.
    */
    public function setPermissionId(?string $value ): void {
        $this->permissionId = $value;
    }

    /**
     * Sets the permissionName property value. The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Does not support $filter.
     *  @param string|null $value Value to set for the permissionName property.
    */
    public function setPermissionName(?string $value ): void {
        $this->permissionName = $value;
    }

}
