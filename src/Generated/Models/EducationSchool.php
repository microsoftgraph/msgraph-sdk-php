<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSchool extends EducationOrganization implements Parsable 
{
    /**
     * @var PhysicalAddress|null $address Address of the school.
    */
    private ?PhysicalAddress $address = null;
    
    /**
     * @var AdministrativeUnit|null $administrativeUnit The underlying administrativeUnit for this school.
    */
    private ?AdministrativeUnit $administrativeUnit = null;
    
    /**
     * @var array<EducationClass>|null $classes Classes taught at the school. Nullable.
    */
    private ?array $classes = null;
    
    /**
     * @var IdentitySet|null $createdBy Entity who created the school.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var string|null $externalId ID of school in syncing system.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $externalPrincipalId ID of principal in syncing system.
    */
    private ?string $externalPrincipalId = null;
    
    /**
     * @var string|null $fax The fax property
    */
    private ?string $fax = null;
    
    /**
     * @var string|null $highestGrade Highest grade taught.
    */
    private ?string $highestGrade = null;
    
    /**
     * @var string|null $lowestGrade Lowest grade taught.
    */
    private ?string $lowestGrade = null;
    
    /**
     * @var string|null $phone Phone number of school.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $principalEmail Email address of the principal.
    */
    private ?string $principalEmail = null;
    
    /**
     * @var string|null $principalName Name of the principal.
    */
    private ?string $principalName = null;
    
    /**
     * @var string|null $schoolNumber School Number.
    */
    private ?string $schoolNumber = null;
    
    /**
     * @var array<EducationUser>|null $users Users in the school. Nullable.
    */
    private ?array $users = null;
    
    /**
     * Instantiates a new EducationSchool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSchool');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSchool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSchool {
        return new EducationSchool();
    }

    /**
     * Gets the address property value. Address of the school.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->address;
    }

    /**
     * Gets the administrativeUnit property value. The underlying administrativeUnit for this school.
     * @return AdministrativeUnit|null
    */
    public function getAdministrativeUnit(): ?AdministrativeUnit {
        return $this->administrativeUnit;
    }

    /**
     * Gets the classes property value. Classes taught at the school. Nullable.
     * @return array<EducationClass>|null
    */
    public function getClasses(): ?array {
        return $this->classes;
    }

    /**
     * Gets the createdBy property value. Entity who created the school.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the externalId property value. ID of school in syncing system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * Gets the externalPrincipalId property value. ID of principal in syncing system.
     * @return string|null
    */
    public function getExternalPrincipalId(): ?string {
        return $this->externalPrincipalId;
    }

    /**
     * Gets the fax property value. The fax property
     * @return string|null
    */
    public function getFax(): ?string {
        return $this->fax;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'administrativeUnit' => fn(ParseNode $n) => $o->setAdministrativeUnit($n->getObjectValue([AdministrativeUnit::class, 'createFromDiscriminatorValue'])),
            'classes' => fn(ParseNode $n) => $o->setClasses($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'externalPrincipalId' => fn(ParseNode $n) => $o->setExternalPrincipalId($n->getStringValue()),
            'fax' => fn(ParseNode $n) => $o->setFax($n->getStringValue()),
            'highestGrade' => fn(ParseNode $n) => $o->setHighestGrade($n->getStringValue()),
            'lowestGrade' => fn(ParseNode $n) => $o->setLowestGrade($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'principalEmail' => fn(ParseNode $n) => $o->setPrincipalEmail($n->getStringValue()),
            'principalName' => fn(ParseNode $n) => $o->setPrincipalName($n->getStringValue()),
            'schoolNumber' => fn(ParseNode $n) => $o->setSchoolNumber($n->getStringValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([EducationUser::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the highestGrade property value. Highest grade taught.
     * @return string|null
    */
    public function getHighestGrade(): ?string {
        return $this->highestGrade;
    }

    /**
     * Gets the lowestGrade property value. Lowest grade taught.
     * @return string|null
    */
    public function getLowestGrade(): ?string {
        return $this->lowestGrade;
    }

    /**
     * Gets the phone property value. Phone number of school.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the principalEmail property value. Email address of the principal.
     * @return string|null
    */
    public function getPrincipalEmail(): ?string {
        return $this->principalEmail;
    }

    /**
     * Gets the principalName property value. Name of the principal.
     * @return string|null
    */
    public function getPrincipalName(): ?string {
        return $this->principalName;
    }

    /**
     * Gets the schoolNumber property value. School Number.
     * @return string|null
    */
    public function getSchoolNumber(): ?string {
        return $this->schoolNumber;
    }

    /**
     * Gets the users property value. Users in the school. Nullable.
     * @return array<EducationUser>|null
    */
    public function getUsers(): ?array {
        return $this->users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeObjectValue('administrativeUnit', $this->administrativeUnit);
        $writer->writeCollectionOfObjectValues('classes', $this->classes);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeStringValue('externalPrincipalId', $this->externalPrincipalId);
        $writer->writeStringValue('fax', $this->fax);
        $writer->writeStringValue('highestGrade', $this->highestGrade);
        $writer->writeStringValue('lowestGrade', $this->lowestGrade);
        $writer->writeStringValue('phone', $this->phone);
        $writer->writeStringValue('principalEmail', $this->principalEmail);
        $writer->writeStringValue('principalName', $this->principalName);
        $writer->writeStringValue('schoolNumber', $this->schoolNumber);
        $writer->writeCollectionOfObjectValues('users', $this->users);
    }

    /**
     * Sets the address property value. Address of the school.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the administrativeUnit property value. The underlying administrativeUnit for this school.
     *  @param AdministrativeUnit|null $value Value to set for the administrativeUnit property.
    */
    public function setAdministrativeUnit(?AdministrativeUnit $value ): void {
        $this->administrativeUnit = $value;
    }

    /**
     * Sets the classes property value. Classes taught at the school. Nullable.
     *  @param array<EducationClass>|null $value Value to set for the classes property.
    */
    public function setClasses(?array $value ): void {
        $this->classes = $value;
    }

    /**
     * Sets the createdBy property value. Entity who created the school.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the externalId property value. ID of school in syncing system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the externalPrincipalId property value. ID of principal in syncing system.
     *  @param string|null $value Value to set for the externalPrincipalId property.
    */
    public function setExternalPrincipalId(?string $value ): void {
        $this->externalPrincipalId = $value;
    }

    /**
     * Sets the fax property value. The fax property
     *  @param string|null $value Value to set for the fax property.
    */
    public function setFax(?string $value ): void {
        $this->fax = $value;
    }

    /**
     * Sets the highestGrade property value. Highest grade taught.
     *  @param string|null $value Value to set for the highestGrade property.
    */
    public function setHighestGrade(?string $value ): void {
        $this->highestGrade = $value;
    }

    /**
     * Sets the lowestGrade property value. Lowest grade taught.
     *  @param string|null $value Value to set for the lowestGrade property.
    */
    public function setLowestGrade(?string $value ): void {
        $this->lowestGrade = $value;
    }

    /**
     * Sets the phone property value. Phone number of school.
     *  @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value ): void {
        $this->phone = $value;
    }

    /**
     * Sets the principalEmail property value. Email address of the principal.
     *  @param string|null $value Value to set for the principalEmail property.
    */
    public function setPrincipalEmail(?string $value ): void {
        $this->principalEmail = $value;
    }

    /**
     * Sets the principalName property value. Name of the principal.
     *  @param string|null $value Value to set for the principalName property.
    */
    public function setPrincipalName(?string $value ): void {
        $this->principalName = $value;
    }

    /**
     * Sets the schoolNumber property value. School Number.
     *  @param string|null $value Value to set for the schoolNumber property.
    */
    public function setSchoolNumber(?string $value ): void {
        $this->schoolNumber = $value;
    }

    /**
     * Sets the users property value. Users in the school. Nullable.
     *  @param array<EducationUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value ): void {
        $this->users = $value;
    }

}
