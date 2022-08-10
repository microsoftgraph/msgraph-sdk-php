<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppConsentApprovalRoute extends Entity implements Parsable 
{
    /**
     * @var array<AppConsentRequest>|null $appConsentRequests A collection of userConsentRequest objects for a specific application.
    */
    private ?array $appConsentRequests = null;
    
    /**
     * Instantiates a new AppConsentApprovalRoute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appConsentApprovalRoute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConsentApprovalRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConsentApprovalRoute {
        return new AppConsentApprovalRoute();
    }

    /**
     * Gets the appConsentRequests property value. A collection of userConsentRequest objects for a specific application.
     * @return array<AppConsentRequest>|null
    */
    public function getAppConsentRequests(): ?array {
        return $this->appConsentRequests;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appConsentRequests' => function (ParseNode $n) use ($o) { $o->setAppConsentRequests($n->getCollectionOfObjectValues(array(AppConsentRequest::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appConsentRequests', $this->appConsentRequests);
    }

    /**
     * Sets the appConsentRequests property value. A collection of userConsentRequest objects for a specific application.
     *  @param array<AppConsentRequest>|null $value Value to set for the appConsentRequests property.
    */
    public function setAppConsentRequests(?array $value ): void {
        $this->appConsentRequests = $value;
    }

}
