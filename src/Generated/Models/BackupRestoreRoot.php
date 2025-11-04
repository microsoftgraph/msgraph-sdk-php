<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BackupRestoreRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new BackupRestoreRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BackupRestoreRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BackupRestoreRoot {
        return new BackupRestoreRoot();
    }

    /**
     * Gets the driveInclusionRules property value. The list of drive inclusion rules applied to the tenant.
     * @return array<DriveProtectionRule>|null
    */
    public function getDriveInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('driveInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionRule::class);
            /** @var array<DriveProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveInclusionRules'");
    }

    /**
     * Gets the driveProtectionUnits property value. The list of drive protection units in the tenant.
     * @return array<DriveProtectionUnit>|null
    */
    public function getDriveProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('driveProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionUnit::class);
            /** @var array<DriveProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveProtectionUnits'");
    }

    /**
     * Gets the driveProtectionUnitsBulkAdditionJobs property value. The driveProtectionUnitsBulkAdditionJobs property
     * @return array<DriveProtectionUnitsBulkAdditionJob>|null
    */
    public function getDriveProtectionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('driveProtectionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionUnitsBulkAdditionJob::class);
            /** @var array<DriveProtectionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveProtectionUnitsBulkAdditionJobs'");
    }

    /**
     * Gets the exchangeProtectionPolicies property value. The list of Exchange protection policies in the tenant.
     * @return array<ExchangeProtectionPolicy>|null
    */
    public function getExchangeProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('exchangeProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExchangeProtectionPolicy::class);
            /** @var array<ExchangeProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeProtectionPolicies'");
    }

    /**
     * Gets the exchangeRestoreSessions property value. The list of Exchange restore sessions available in the tenant.
     * @return array<ExchangeRestoreSession>|null
    */
    public function getExchangeRestoreSessions(): ?array {
        $val = $this->getBackingStore()->get('exchangeRestoreSessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExchangeRestoreSession::class);
            /** @var array<ExchangeRestoreSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeRestoreSessions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driveInclusionRules' => fn(ParseNode $n) => $o->setDriveInclusionRules($n->getCollectionOfObjectValues([DriveProtectionRule::class, 'createFromDiscriminatorValue'])),
            'driveProtectionUnits' => fn(ParseNode $n) => $o->setDriveProtectionUnits($n->getCollectionOfObjectValues([DriveProtectionUnit::class, 'createFromDiscriminatorValue'])),
            'driveProtectionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setDriveProtectionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([DriveProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
            'exchangeProtectionPolicies' => fn(ParseNode $n) => $o->setExchangeProtectionPolicies($n->getCollectionOfObjectValues([ExchangeProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'exchangeRestoreSessions' => fn(ParseNode $n) => $o->setExchangeRestoreSessions($n->getCollectionOfObjectValues([ExchangeRestoreSession::class, 'createFromDiscriminatorValue'])),
            'mailboxInclusionRules' => fn(ParseNode $n) => $o->setMailboxInclusionRules($n->getCollectionOfObjectValues([MailboxProtectionRule::class, 'createFromDiscriminatorValue'])),
            'mailboxProtectionUnits' => fn(ParseNode $n) => $o->setMailboxProtectionUnits($n->getCollectionOfObjectValues([MailboxProtectionUnit::class, 'createFromDiscriminatorValue'])),
            'mailboxProtectionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setMailboxProtectionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([MailboxProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
            'oneDriveForBusinessProtectionPolicies' => fn(ParseNode $n) => $o->setOneDriveForBusinessProtectionPolicies($n->getCollectionOfObjectValues([OneDriveForBusinessProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'oneDriveForBusinessRestoreSessions' => fn(ParseNode $n) => $o->setOneDriveForBusinessRestoreSessions($n->getCollectionOfObjectValues([OneDriveForBusinessRestoreSession::class, 'createFromDiscriminatorValue'])),
            'protectionPolicies' => fn(ParseNode $n) => $o->setProtectionPolicies($n->getCollectionOfObjectValues([ProtectionPolicyBase::class, 'createFromDiscriminatorValue'])),
            'protectionUnits' => fn(ParseNode $n) => $o->setProtectionUnits($n->getCollectionOfObjectValues([ProtectionUnitBase::class, 'createFromDiscriminatorValue'])),
            'restorePoints' => fn(ParseNode $n) => $o->setRestorePoints($n->getCollectionOfObjectValues([RestorePoint::class, 'createFromDiscriminatorValue'])),
            'restoreSessions' => fn(ParseNode $n) => $o->setRestoreSessions($n->getCollectionOfObjectValues([RestoreSessionBase::class, 'createFromDiscriminatorValue'])),
            'serviceApps' => fn(ParseNode $n) => $o->setServiceApps($n->getCollectionOfObjectValues([ServiceApp::class, 'createFromDiscriminatorValue'])),
            'serviceStatus' => fn(ParseNode $n) => $o->setServiceStatus($n->getObjectValue([ServiceStatus::class, 'createFromDiscriminatorValue'])),
            'sharePointProtectionPolicies' => fn(ParseNode $n) => $o->setSharePointProtectionPolicies($n->getCollectionOfObjectValues([SharePointProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'sharePointRestoreSessions' => fn(ParseNode $n) => $o->setSharePointRestoreSessions($n->getCollectionOfObjectValues([SharePointRestoreSession::class, 'createFromDiscriminatorValue'])),
            'siteInclusionRules' => fn(ParseNode $n) => $o->setSiteInclusionRules($n->getCollectionOfObjectValues([SiteProtectionRule::class, 'createFromDiscriminatorValue'])),
            'siteProtectionUnits' => fn(ParseNode $n) => $o->setSiteProtectionUnits($n->getCollectionOfObjectValues([SiteProtectionUnit::class, 'createFromDiscriminatorValue'])),
            'siteProtectionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setSiteProtectionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([SiteProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mailboxInclusionRules property value. The list of mailbox inclusion rules applied to the tenant.
     * @return array<MailboxProtectionRule>|null
    */
    public function getMailboxInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('mailboxInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionRule::class);
            /** @var array<MailboxProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxInclusionRules'");
    }

    /**
     * Gets the mailboxProtectionUnits property value. The list of mailbox protection units in the tenant.
     * @return array<MailboxProtectionUnit>|null
    */
    public function getMailboxProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('mailboxProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionUnit::class);
            /** @var array<MailboxProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxProtectionUnits'");
    }

    /**
     * Gets the mailboxProtectionUnitsBulkAdditionJobs property value. The mailboxProtectionUnitsBulkAdditionJobs property
     * @return array<MailboxProtectionUnitsBulkAdditionJob>|null
    */
    public function getMailboxProtectionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('mailboxProtectionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxProtectionUnitsBulkAdditionJob::class);
            /** @var array<MailboxProtectionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxProtectionUnitsBulkAdditionJobs'");
    }

    /**
     * Gets the oneDriveForBusinessProtectionPolicies property value. The list of OneDrive for Business protection policies in the tenant.
     * @return array<OneDriveForBusinessProtectionPolicy>|null
    */
    public function getOneDriveForBusinessProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('oneDriveForBusinessProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OneDriveForBusinessProtectionPolicy::class);
            /** @var array<OneDriveForBusinessProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveForBusinessProtectionPolicies'");
    }

    /**
     * Gets the oneDriveForBusinessRestoreSessions property value. The list of OneDrive for Business restore sessions available in the tenant.
     * @return array<OneDriveForBusinessRestoreSession>|null
    */
    public function getOneDriveForBusinessRestoreSessions(): ?array {
        $val = $this->getBackingStore()->get('oneDriveForBusinessRestoreSessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OneDriveForBusinessRestoreSession::class);
            /** @var array<OneDriveForBusinessRestoreSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveForBusinessRestoreSessions'");
    }

    /**
     * Gets the protectionPolicies property value. List of protection policies in the tenant.
     * @return array<ProtectionPolicyBase>|null
    */
    public function getProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('protectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProtectionPolicyBase::class);
            /** @var array<ProtectionPolicyBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionPolicies'");
    }

    /**
     * Gets the protectionUnits property value. List of protection units in the tenant.
     * @return array<ProtectionUnitBase>|null
    */
    public function getProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('protectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProtectionUnitBase::class);
            /** @var array<ProtectionUnitBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnits'");
    }

    /**
     * Gets the restorePoints property value. List of restore points in the tenant.
     * @return array<RestorePoint>|null
    */
    public function getRestorePoints(): ?array {
        $val = $this->getBackingStore()->get('restorePoints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RestorePoint::class);
            /** @var array<RestorePoint>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePoints'");
    }

    /**
     * Gets the restoreSessions property value. List of restore sessions in the tenant.
     * @return array<RestoreSessionBase>|null
    */
    public function getRestoreSessions(): ?array {
        $val = $this->getBackingStore()->get('restoreSessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RestoreSessionBase::class);
            /** @var array<RestoreSessionBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreSessions'");
    }

    /**
     * Gets the serviceApps property value. List of Backup Storage apps in the tenant.
     * @return array<ServiceApp>|null
    */
    public function getServiceApps(): ?array {
        $val = $this->getBackingStore()->get('serviceApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceApp::class);
            /** @var array<ServiceApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceApps'");
    }

    /**
     * Gets the serviceStatus property value. Represents the tenant-level status of the Backup Storage service.
     * @return ServiceStatus|null
    */
    public function getServiceStatus(): ?ServiceStatus {
        $val = $this->getBackingStore()->get('serviceStatus');
        if (is_null($val) || $val instanceof ServiceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceStatus'");
    }

    /**
     * Gets the sharePointProtectionPolicies property value. The list of SharePoint protection policies in the tenant.
     * @return array<SharePointProtectionPolicy>|null
    */
    public function getSharePointProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('sharePointProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointProtectionPolicy::class);
            /** @var array<SharePointProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointProtectionPolicies'");
    }

    /**
     * Gets the sharePointRestoreSessions property value. The list of SharePoint restore sessions available in the tenant.
     * @return array<SharePointRestoreSession>|null
    */
    public function getSharePointRestoreSessions(): ?array {
        $val = $this->getBackingStore()->get('sharePointRestoreSessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointRestoreSession::class);
            /** @var array<SharePointRestoreSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointRestoreSessions'");
    }

    /**
     * Gets the siteInclusionRules property value. The list of site inclusion rules applied to the tenant.
     * @return array<SiteProtectionRule>|null
    */
    public function getSiteInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('siteInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteProtectionRule::class);
            /** @var array<SiteProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteInclusionRules'");
    }

    /**
     * Gets the siteProtectionUnits property value. The list of site protection units in the tenant.
     * @return array<SiteProtectionUnit>|null
    */
    public function getSiteProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('siteProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteProtectionUnit::class);
            /** @var array<SiteProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteProtectionUnits'");
    }

    /**
     * Gets the siteProtectionUnitsBulkAdditionJobs property value. The siteProtectionUnitsBulkAdditionJobs property
     * @return array<SiteProtectionUnitsBulkAdditionJob>|null
    */
    public function getSiteProtectionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('siteProtectionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteProtectionUnitsBulkAdditionJob::class);
            /** @var array<SiteProtectionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteProtectionUnitsBulkAdditionJobs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('driveInclusionRules', $this->getDriveInclusionRules());
        $writer->writeCollectionOfObjectValues('driveProtectionUnits', $this->getDriveProtectionUnits());
        $writer->writeCollectionOfObjectValues('driveProtectionUnitsBulkAdditionJobs', $this->getDriveProtectionUnitsBulkAdditionJobs());
        $writer->writeCollectionOfObjectValues('exchangeProtectionPolicies', $this->getExchangeProtectionPolicies());
        $writer->writeCollectionOfObjectValues('exchangeRestoreSessions', $this->getExchangeRestoreSessions());
        $writer->writeCollectionOfObjectValues('mailboxInclusionRules', $this->getMailboxInclusionRules());
        $writer->writeCollectionOfObjectValues('mailboxProtectionUnits', $this->getMailboxProtectionUnits());
        $writer->writeCollectionOfObjectValues('mailboxProtectionUnitsBulkAdditionJobs', $this->getMailboxProtectionUnitsBulkAdditionJobs());
        $writer->writeCollectionOfObjectValues('oneDriveForBusinessProtectionPolicies', $this->getOneDriveForBusinessProtectionPolicies());
        $writer->writeCollectionOfObjectValues('oneDriveForBusinessRestoreSessions', $this->getOneDriveForBusinessRestoreSessions());
        $writer->writeCollectionOfObjectValues('protectionPolicies', $this->getProtectionPolicies());
        $writer->writeCollectionOfObjectValues('protectionUnits', $this->getProtectionUnits());
        $writer->writeCollectionOfObjectValues('restorePoints', $this->getRestorePoints());
        $writer->writeCollectionOfObjectValues('restoreSessions', $this->getRestoreSessions());
        $writer->writeCollectionOfObjectValues('serviceApps', $this->getServiceApps());
        $writer->writeObjectValue('serviceStatus', $this->getServiceStatus());
        $writer->writeCollectionOfObjectValues('sharePointProtectionPolicies', $this->getSharePointProtectionPolicies());
        $writer->writeCollectionOfObjectValues('sharePointRestoreSessions', $this->getSharePointRestoreSessions());
        $writer->writeCollectionOfObjectValues('siteInclusionRules', $this->getSiteInclusionRules());
        $writer->writeCollectionOfObjectValues('siteProtectionUnits', $this->getSiteProtectionUnits());
        $writer->writeCollectionOfObjectValues('siteProtectionUnitsBulkAdditionJobs', $this->getSiteProtectionUnitsBulkAdditionJobs());
    }

    /**
     * Sets the driveInclusionRules property value. The list of drive inclusion rules applied to the tenant.
     * @param array<DriveProtectionRule>|null $value Value to set for the driveInclusionRules property.
    */
    public function setDriveInclusionRules(?array $value): void {
        $this->getBackingStore()->set('driveInclusionRules', $value);
    }

    /**
     * Sets the driveProtectionUnits property value. The list of drive protection units in the tenant.
     * @param array<DriveProtectionUnit>|null $value Value to set for the driveProtectionUnits property.
    */
    public function setDriveProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('driveProtectionUnits', $value);
    }

    /**
     * Sets the driveProtectionUnitsBulkAdditionJobs property value. The driveProtectionUnitsBulkAdditionJobs property
     * @param array<DriveProtectionUnitsBulkAdditionJob>|null $value Value to set for the driveProtectionUnitsBulkAdditionJobs property.
    */
    public function setDriveProtectionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('driveProtectionUnitsBulkAdditionJobs', $value);
    }

    /**
     * Sets the exchangeProtectionPolicies property value. The list of Exchange protection policies in the tenant.
     * @param array<ExchangeProtectionPolicy>|null $value Value to set for the exchangeProtectionPolicies property.
    */
    public function setExchangeProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('exchangeProtectionPolicies', $value);
    }

    /**
     * Sets the exchangeRestoreSessions property value. The list of Exchange restore sessions available in the tenant.
     * @param array<ExchangeRestoreSession>|null $value Value to set for the exchangeRestoreSessions property.
    */
    public function setExchangeRestoreSessions(?array $value): void {
        $this->getBackingStore()->set('exchangeRestoreSessions', $value);
    }

    /**
     * Sets the mailboxInclusionRules property value. The list of mailbox inclusion rules applied to the tenant.
     * @param array<MailboxProtectionRule>|null $value Value to set for the mailboxInclusionRules property.
    */
    public function setMailboxInclusionRules(?array $value): void {
        $this->getBackingStore()->set('mailboxInclusionRules', $value);
    }

    /**
     * Sets the mailboxProtectionUnits property value. The list of mailbox protection units in the tenant.
     * @param array<MailboxProtectionUnit>|null $value Value to set for the mailboxProtectionUnits property.
    */
    public function setMailboxProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('mailboxProtectionUnits', $value);
    }

    /**
     * Sets the mailboxProtectionUnitsBulkAdditionJobs property value. The mailboxProtectionUnitsBulkAdditionJobs property
     * @param array<MailboxProtectionUnitsBulkAdditionJob>|null $value Value to set for the mailboxProtectionUnitsBulkAdditionJobs property.
    */
    public function setMailboxProtectionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('mailboxProtectionUnitsBulkAdditionJobs', $value);
    }

    /**
     * Sets the oneDriveForBusinessProtectionPolicies property value. The list of OneDrive for Business protection policies in the tenant.
     * @param array<OneDriveForBusinessProtectionPolicy>|null $value Value to set for the oneDriveForBusinessProtectionPolicies property.
    */
    public function setOneDriveForBusinessProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('oneDriveForBusinessProtectionPolicies', $value);
    }

    /**
     * Sets the oneDriveForBusinessRestoreSessions property value. The list of OneDrive for Business restore sessions available in the tenant.
     * @param array<OneDriveForBusinessRestoreSession>|null $value Value to set for the oneDriveForBusinessRestoreSessions property.
    */
    public function setOneDriveForBusinessRestoreSessions(?array $value): void {
        $this->getBackingStore()->set('oneDriveForBusinessRestoreSessions', $value);
    }

    /**
     * Sets the protectionPolicies property value. List of protection policies in the tenant.
     * @param array<ProtectionPolicyBase>|null $value Value to set for the protectionPolicies property.
    */
    public function setProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('protectionPolicies', $value);
    }

    /**
     * Sets the protectionUnits property value. List of protection units in the tenant.
     * @param array<ProtectionUnitBase>|null $value Value to set for the protectionUnits property.
    */
    public function setProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('protectionUnits', $value);
    }

    /**
     * Sets the restorePoints property value. List of restore points in the tenant.
     * @param array<RestorePoint>|null $value Value to set for the restorePoints property.
    */
    public function setRestorePoints(?array $value): void {
        $this->getBackingStore()->set('restorePoints', $value);
    }

    /**
     * Sets the restoreSessions property value. List of restore sessions in the tenant.
     * @param array<RestoreSessionBase>|null $value Value to set for the restoreSessions property.
    */
    public function setRestoreSessions(?array $value): void {
        $this->getBackingStore()->set('restoreSessions', $value);
    }

    /**
     * Sets the serviceApps property value. List of Backup Storage apps in the tenant.
     * @param array<ServiceApp>|null $value Value to set for the serviceApps property.
    */
    public function setServiceApps(?array $value): void {
        $this->getBackingStore()->set('serviceApps', $value);
    }

    /**
     * Sets the serviceStatus property value. Represents the tenant-level status of the Backup Storage service.
     * @param ServiceStatus|null $value Value to set for the serviceStatus property.
    */
    public function setServiceStatus(?ServiceStatus $value): void {
        $this->getBackingStore()->set('serviceStatus', $value);
    }

    /**
     * Sets the sharePointProtectionPolicies property value. The list of SharePoint protection policies in the tenant.
     * @param array<SharePointProtectionPolicy>|null $value Value to set for the sharePointProtectionPolicies property.
    */
    public function setSharePointProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('sharePointProtectionPolicies', $value);
    }

    /**
     * Sets the sharePointRestoreSessions property value. The list of SharePoint restore sessions available in the tenant.
     * @param array<SharePointRestoreSession>|null $value Value to set for the sharePointRestoreSessions property.
    */
    public function setSharePointRestoreSessions(?array $value): void {
        $this->getBackingStore()->set('sharePointRestoreSessions', $value);
    }

    /**
     * Sets the siteInclusionRules property value. The list of site inclusion rules applied to the tenant.
     * @param array<SiteProtectionRule>|null $value Value to set for the siteInclusionRules property.
    */
    public function setSiteInclusionRules(?array $value): void {
        $this->getBackingStore()->set('siteInclusionRules', $value);
    }

    /**
     * Sets the siteProtectionUnits property value. The list of site protection units in the tenant.
     * @param array<SiteProtectionUnit>|null $value Value to set for the siteProtectionUnits property.
    */
    public function setSiteProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('siteProtectionUnits', $value);
    }

    /**
     * Sets the siteProtectionUnitsBulkAdditionJobs property value. The siteProtectionUnitsBulkAdditionJobs property
     * @param array<SiteProtectionUnitsBulkAdditionJob>|null $value Value to set for the siteProtectionUnitsBulkAdditionJobs property.
    */
    public function setSiteProtectionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('siteProtectionUnitsBulkAdditionJobs', $value);
    }

}
