<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Windows10EndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $applicationGuardAllowPersistence Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
    */
    private ?bool $applicationGuardAllowPersistence = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToLocalPrinters Allow printing to Local Printers from Container
    */
    private ?bool $applicationGuardAllowPrintToLocalPrinters = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToNetworkPrinters Allow printing to Network Printers from Container
    */
    private ?bool $applicationGuardAllowPrintToNetworkPrinters = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToPDF Allow printing to PDF from Container
    */
    private ?bool $applicationGuardAllowPrintToPDF = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToXPS Allow printing to XPS from Container
    */
    private ?bool $applicationGuardAllowPrintToXPS = null;
    
    /**
     * @var ApplicationGuardBlockClipboardSharingType|null $applicationGuardBlockClipboardSharing Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
    */
    private ?ApplicationGuardBlockClipboardSharingType $applicationGuardBlockClipboardSharing = null;
    
    /**
     * @var ApplicationGuardBlockFileTransferType|null $applicationGuardBlockFileTransfer Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
    */
    private ?ApplicationGuardBlockFileTransferType $applicationGuardBlockFileTransfer = null;
    
    /**
     * @var bool|null $applicationGuardBlockNonEnterpriseContent Block enterprise sites to load non-enterprise content, such as third party plug-ins
    */
    private ?bool $applicationGuardBlockNonEnterpriseContent = null;
    
    /**
     * @var bool|null $applicationGuardEnabled Enable Windows Defender Application Guard
    */
    private ?bool $applicationGuardEnabled = null;
    
    /**
     * @var bool|null $applicationGuardForceAuditing Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
    */
    private ?bool $applicationGuardForceAuditing = null;
    
    /**
     * @var AppLockerApplicationControlType|null $appLockerApplicationControl Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
    */
    private ?AppLockerApplicationControlType $appLockerApplicationControl = null;
    
    /**
     * @var bool|null $bitLockerDisableWarningForOtherDiskEncryption Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
    */
    private ?bool $bitLockerDisableWarningForOtherDiskEncryption = null;
    
    /**
     * @var bool|null $bitLockerEnableStorageCardEncryptionOnMobile Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
    */
    private ?bool $bitLockerEnableStorageCardEncryptionOnMobile = null;
    
    /**
     * @var bool|null $bitLockerEncryptDevice Allows the admin to require encryption to be turned on using BitLocker.
    */
    private ?bool $bitLockerEncryptDevice = null;
    
    /**
     * @var BitLockerRemovableDrivePolicy|null $bitLockerRemovableDrivePolicy BitLocker Removable Drive Policy.
    */
    private ?BitLockerRemovableDrivePolicy $bitLockerRemovableDrivePolicy = null;
    
    /**
     * @var array<string>|null $defenderAdditionalGuardedFolders List of folder paths to be added to the list of protected folders
    */
    private ?array $defenderAdditionalGuardedFolders = null;
    
    /**
     * @var array<string>|null $defenderAttackSurfaceReductionExcludedPaths List of exe files and folders to be excluded from attack surface reduction rules
    */
    private ?array $defenderAttackSurfaceReductionExcludedPaths = null;
    
    /**
     * @var StreamInterface|null $defenderExploitProtectionXml Xml content containing information regarding exploit protection details.
    */
    private ?StreamInterface $defenderExploitProtectionXml = null;
    
    /**
     * @var string|null $defenderExploitProtectionXmlFileName Name of the file from which DefenderExploitProtectionXml was obtained.
    */
    private ?string $defenderExploitProtectionXmlFileName = null;
    
    /**
     * @var array<string>|null $defenderGuardedFoldersAllowedAppPaths List of paths to exe that are allowed to access protected folders
    */
    private ?array $defenderGuardedFoldersAllowedAppPaths = null;
    
    /**
     * @var bool|null $defenderSecurityCenterBlockExploitProtectionOverride Indicates whether or not to block user from overriding Exploit Protection settings.
    */
    private ?bool $defenderSecurityCenterBlockExploitProtectionOverride = null;
    
    /**
     * @var bool|null $firewallBlockStatefulFTP Blocks stateful FTP connections to the device
    */
    private ?bool $firewallBlockStatefulFTP = null;
    
    /**
     * @var FirewallCertificateRevocationListCheckMethodType|null $firewallCertificateRevocationListCheckMethod Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
    */
    private ?FirewallCertificateRevocationListCheckMethodType $firewallCertificateRevocationListCheckMethod = null;
    
    /**
     * @var int|null $firewallIdleTimeoutForSecurityAssociationInSeconds Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
    */
    private ?int $firewallIdleTimeoutForSecurityAssociationInSeconds = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowDHCP Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
    */
    private ?bool $firewallIPSecExemptionsAllowDHCP = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowICMP Configures IPSec exemptions to allow ICMP
    */
    private ?bool $firewallIPSecExemptionsAllowICMP = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowNeighborDiscovery Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
    */
    private ?bool $firewallIPSecExemptionsAllowNeighborDiscovery = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowRouterDiscovery Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
    */
    private ?bool $firewallIPSecExemptionsAllowRouterDiscovery = null;
    
    /**
     * @var bool|null $firewallMergeKeyingModuleSettings If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
    */
    private ?bool $firewallMergeKeyingModuleSettings = null;
    
    /**
     * @var FirewallPacketQueueingMethodType|null $firewallPacketQueueingMethod Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
    */
    private ?FirewallPacketQueueingMethodType $firewallPacketQueueingMethod = null;
    
    /**
     * @var FirewallPreSharedKeyEncodingMethodType|null $firewallPreSharedKeyEncodingMethod Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
    */
    private ?FirewallPreSharedKeyEncodingMethodType $firewallPreSharedKeyEncodingMethod = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfileDomain Configures the firewall profile settings for domain networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfileDomain = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfilePrivate Configures the firewall profile settings for private networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfilePrivate = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfilePublic Configures the firewall profile settings for public networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfilePublic = null;
    
    /**
     * @var bool|null $smartScreenBlockOverrideForFiles Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
    */
    private ?bool $smartScreenBlockOverrideForFiles = null;
    
    /**
     * @var bool|null $smartScreenEnableInShell Allows IT Admins to configure SmartScreen for Windows.
    */
    private ?bool $smartScreenEnableInShell = null;
    
    /**
     * Instantiates a new Windows10EndpointProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EndpointProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EndpointProtectionConfiguration {
        return new Windows10EndpointProtectionConfiguration();
    }

    /**
     * Gets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     * @return bool|null
    */
    public function getApplicationGuardAllowPersistence(): ?bool {
        return $this->applicationGuardAllowPersistence;
    }

    /**
     * Gets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToLocalPrinters(): ?bool {
        return $this->applicationGuardAllowPrintToLocalPrinters;
    }

    /**
     * Gets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters(): ?bool {
        return $this->applicationGuardAllowPrintToNetworkPrinters;
    }

    /**
     * Gets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToPDF(): ?bool {
        return $this->applicationGuardAllowPrintToPDF;
    }

    /**
     * Gets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToXPS(): ?bool {
        return $this->applicationGuardAllowPrintToXPS;
    }

    /**
     * Gets the applicationGuardBlockClipboardSharing property value. Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
     * @return ApplicationGuardBlockClipboardSharingType|null
    */
    public function getApplicationGuardBlockClipboardSharing(): ?ApplicationGuardBlockClipboardSharingType {
        return $this->applicationGuardBlockClipboardSharing;
    }

    /**
     * Gets the applicationGuardBlockFileTransfer property value. Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
     * @return ApplicationGuardBlockFileTransferType|null
    */
    public function getApplicationGuardBlockFileTransfer(): ?ApplicationGuardBlockFileTransferType {
        return $this->applicationGuardBlockFileTransfer;
    }

    /**
     * Gets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     * @return bool|null
    */
    public function getApplicationGuardBlockNonEnterpriseContent(): ?bool {
        return $this->applicationGuardBlockNonEnterpriseContent;
    }

    /**
     * Gets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     * @return bool|null
    */
    public function getApplicationGuardEnabled(): ?bool {
        return $this->applicationGuardEnabled;
    }

    /**
     * Gets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     * @return bool|null
    */
    public function getApplicationGuardForceAuditing(): ?bool {
        return $this->applicationGuardForceAuditing;
    }

    /**
     * Gets the appLockerApplicationControl property value. Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
     * @return AppLockerApplicationControlType|null
    */
    public function getAppLockerApplicationControl(): ?AppLockerApplicationControlType {
        return $this->appLockerApplicationControl;
    }

    /**
     * Gets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     * @return bool|null
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption(): ?bool {
        return $this->bitLockerDisableWarningForOtherDiskEncryption;
    }

    /**
     * Gets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     * @return bool|null
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile(): ?bool {
        return $this->bitLockerEnableStorageCardEncryptionOnMobile;
    }

    /**
     * Gets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     * @return bool|null
    */
    public function getBitLockerEncryptDevice(): ?bool {
        return $this->bitLockerEncryptDevice;
    }

    /**
     * Gets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     * @return BitLockerRemovableDrivePolicy|null
    */
    public function getBitLockerRemovableDrivePolicy(): ?BitLockerRemovableDrivePolicy {
        return $this->bitLockerRemovableDrivePolicy;
    }

    /**
     * Gets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     * @return array<string>|null
    */
    public function getDefenderAdditionalGuardedFolders(): ?array {
        return $this->defenderAdditionalGuardedFolders;
    }

    /**
     * Gets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     * @return array<string>|null
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths(): ?array {
        return $this->defenderAttackSurfaceReductionExcludedPaths;
    }

    /**
     * Gets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     * @return StreamInterface|null
    */
    public function getDefenderExploitProtectionXml(): ?StreamInterface {
        return $this->defenderExploitProtectionXml;
    }

    /**
     * Gets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     * @return string|null
    */
    public function getDefenderExploitProtectionXmlFileName(): ?string {
        return $this->defenderExploitProtectionXmlFileName;
    }

    /**
     * Gets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     * @return array<string>|null
    */
    public function getDefenderGuardedFoldersAllowedAppPaths(): ?array {
        return $this->defenderGuardedFoldersAllowedAppPaths;
    }

    /**
     * Gets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     * @return bool|null
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride(): ?bool {
        return $this->defenderSecurityCenterBlockExploitProtectionOverride;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationGuardAllowPersistence' => function (ParseNode $n) use ($o) { $o->setApplicationGuardAllowPersistence($n->getBooleanValue()); },
            'applicationGuardAllowPrintToLocalPrinters' => function (ParseNode $n) use ($o) { $o->setApplicationGuardAllowPrintToLocalPrinters($n->getBooleanValue()); },
            'applicationGuardAllowPrintToNetworkPrinters' => function (ParseNode $n) use ($o) { $o->setApplicationGuardAllowPrintToNetworkPrinters($n->getBooleanValue()); },
            'applicationGuardAllowPrintToPDF' => function (ParseNode $n) use ($o) { $o->setApplicationGuardAllowPrintToPDF($n->getBooleanValue()); },
            'applicationGuardAllowPrintToXPS' => function (ParseNode $n) use ($o) { $o->setApplicationGuardAllowPrintToXPS($n->getBooleanValue()); },
            'applicationGuardBlockClipboardSharing' => function (ParseNode $n) use ($o) { $o->setApplicationGuardBlockClipboardSharing($n->getEnumValue(ApplicationGuardBlockClipboardSharingType::class)); },
            'applicationGuardBlockFileTransfer' => function (ParseNode $n) use ($o) { $o->setApplicationGuardBlockFileTransfer($n->getEnumValue(ApplicationGuardBlockFileTransferType::class)); },
            'applicationGuardBlockNonEnterpriseContent' => function (ParseNode $n) use ($o) { $o->setApplicationGuardBlockNonEnterpriseContent($n->getBooleanValue()); },
            'applicationGuardEnabled' => function (ParseNode $n) use ($o) { $o->setApplicationGuardEnabled($n->getBooleanValue()); },
            'applicationGuardForceAuditing' => function (ParseNode $n) use ($o) { $o->setApplicationGuardForceAuditing($n->getBooleanValue()); },
            'appLockerApplicationControl' => function (ParseNode $n) use ($o) { $o->setAppLockerApplicationControl($n->getEnumValue(AppLockerApplicationControlType::class)); },
            'bitLockerDisableWarningForOtherDiskEncryption' => function (ParseNode $n) use ($o) { $o->setBitLockerDisableWarningForOtherDiskEncryption($n->getBooleanValue()); },
            'bitLockerEnableStorageCardEncryptionOnMobile' => function (ParseNode $n) use ($o) { $o->setBitLockerEnableStorageCardEncryptionOnMobile($n->getBooleanValue()); },
            'bitLockerEncryptDevice' => function (ParseNode $n) use ($o) { $o->setBitLockerEncryptDevice($n->getBooleanValue()); },
            'bitLockerRemovableDrivePolicy' => function (ParseNode $n) use ($o) { $o->setBitLockerRemovableDrivePolicy($n->getObjectValue(array(BitLockerRemovableDrivePolicy::class, 'createFromDiscriminatorValue'))); },
            'defenderAdditionalGuardedFolders' => function (ParseNode $n) use ($o) { $o->setDefenderAdditionalGuardedFolders($n->getCollectionOfPrimitiveValues()); },
            'defenderAttackSurfaceReductionExcludedPaths' => function (ParseNode $n) use ($o) { $o->setDefenderAttackSurfaceReductionExcludedPaths($n->getCollectionOfPrimitiveValues()); },
            'defenderExploitProtectionXml' => function (ParseNode $n) use ($o) { $o->setDefenderExploitProtectionXml($n->getBinaryContent()); },
            'defenderExploitProtectionXmlFileName' => function (ParseNode $n) use ($o) { $o->setDefenderExploitProtectionXmlFileName($n->getStringValue()); },
            'defenderGuardedFoldersAllowedAppPaths' => function (ParseNode $n) use ($o) { $o->setDefenderGuardedFoldersAllowedAppPaths($n->getCollectionOfPrimitiveValues()); },
            'defenderSecurityCenterBlockExploitProtectionOverride' => function (ParseNode $n) use ($o) { $o->setDefenderSecurityCenterBlockExploitProtectionOverride($n->getBooleanValue()); },
            'firewallBlockStatefulFTP' => function (ParseNode $n) use ($o) { $o->setFirewallBlockStatefulFTP($n->getBooleanValue()); },
            'firewallCertificateRevocationListCheckMethod' => function (ParseNode $n) use ($o) { $o->setFirewallCertificateRevocationListCheckMethod($n->getEnumValue(FirewallCertificateRevocationListCheckMethodType::class)); },
            'firewallIdleTimeoutForSecurityAssociationInSeconds' => function (ParseNode $n) use ($o) { $o->setFirewallIdleTimeoutForSecurityAssociationInSeconds($n->getIntegerValue()); },
            'firewallIPSecExemptionsAllowDHCP' => function (ParseNode $n) use ($o) { $o->setFirewallIPSecExemptionsAllowDHCP($n->getBooleanValue()); },
            'firewallIPSecExemptionsAllowICMP' => function (ParseNode $n) use ($o) { $o->setFirewallIPSecExemptionsAllowICMP($n->getBooleanValue()); },
            'firewallIPSecExemptionsAllowNeighborDiscovery' => function (ParseNode $n) use ($o) { $o->setFirewallIPSecExemptionsAllowNeighborDiscovery($n->getBooleanValue()); },
            'firewallIPSecExemptionsAllowRouterDiscovery' => function (ParseNode $n) use ($o) { $o->setFirewallIPSecExemptionsAllowRouterDiscovery($n->getBooleanValue()); },
            'firewallMergeKeyingModuleSettings' => function (ParseNode $n) use ($o) { $o->setFirewallMergeKeyingModuleSettings($n->getBooleanValue()); },
            'firewallPacketQueueingMethod' => function (ParseNode $n) use ($o) { $o->setFirewallPacketQueueingMethod($n->getEnumValue(FirewallPacketQueueingMethodType::class)); },
            'firewallPreSharedKeyEncodingMethod' => function (ParseNode $n) use ($o) { $o->setFirewallPreSharedKeyEncodingMethod($n->getEnumValue(FirewallPreSharedKeyEncodingMethodType::class)); },
            'firewallProfileDomain' => function (ParseNode $n) use ($o) { $o->setFirewallProfileDomain($n->getObjectValue(array(WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'))); },
            'firewallProfilePrivate' => function (ParseNode $n) use ($o) { $o->setFirewallProfilePrivate($n->getObjectValue(array(WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'))); },
            'firewallProfilePublic' => function (ParseNode $n) use ($o) { $o->setFirewallProfilePublic($n->getObjectValue(array(WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'))); },
            'smartScreenBlockOverrideForFiles' => function (ParseNode $n) use ($o) { $o->setSmartScreenBlockOverrideForFiles($n->getBooleanValue()); },
            'smartScreenEnableInShell' => function (ParseNode $n) use ($o) { $o->setSmartScreenEnableInShell($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     * @return bool|null
    */
    public function getFirewallBlockStatefulFTP(): ?bool {
        return $this->firewallBlockStatefulFTP;
    }

    /**
     * Gets the firewallCertificateRevocationListCheckMethod property value. Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
     * @return FirewallCertificateRevocationListCheckMethodType|null
    */
    public function getFirewallCertificateRevocationListCheckMethod(): ?FirewallCertificateRevocationListCheckMethodType {
        return $this->firewallCertificateRevocationListCheckMethod;
    }

    /**
     * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     * @return int|null
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds(): ?int {
        return $this->firewallIdleTimeoutForSecurityAssociationInSeconds;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowDHCP(): ?bool {
        return $this->firewallIPSecExemptionsAllowDHCP;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowICMP(): ?bool {
        return $this->firewallIPSecExemptionsAllowICMP;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery(): ?bool {
        return $this->firewallIPSecExemptionsAllowNeighborDiscovery;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery(): ?bool {
        return $this->firewallIPSecExemptionsAllowRouterDiscovery;
    }

    /**
     * Gets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     * @return bool|null
    */
    public function getFirewallMergeKeyingModuleSettings(): ?bool {
        return $this->firewallMergeKeyingModuleSettings;
    }

    /**
     * Gets the firewallPacketQueueingMethod property value. Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
     * @return FirewallPacketQueueingMethodType|null
    */
    public function getFirewallPacketQueueingMethod(): ?FirewallPacketQueueingMethodType {
        return $this->firewallPacketQueueingMethod;
    }

    /**
     * Gets the firewallPreSharedKeyEncodingMethod property value. Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
     * @return FirewallPreSharedKeyEncodingMethodType|null
    */
    public function getFirewallPreSharedKeyEncodingMethod(): ?FirewallPreSharedKeyEncodingMethodType {
        return $this->firewallPreSharedKeyEncodingMethod;
    }

    /**
     * Gets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfileDomain(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfileDomain;
    }

    /**
     * Gets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePrivate(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfilePrivate;
    }

    /**
     * Gets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePublic(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfilePublic;
    }

    /**
     * Gets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     * @return bool|null
    */
    public function getSmartScreenBlockOverrideForFiles(): ?bool {
        return $this->smartScreenBlockOverrideForFiles;
    }

    /**
     * Gets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     * @return bool|null
    */
    public function getSmartScreenEnableInShell(): ?bool {
        return $this->smartScreenEnableInShell;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applicationGuardAllowPersistence', $this->applicationGuardAllowPersistence);
        $writer->writeBooleanValue('applicationGuardAllowPrintToLocalPrinters', $this->applicationGuardAllowPrintToLocalPrinters);
        $writer->writeBooleanValue('applicationGuardAllowPrintToNetworkPrinters', $this->applicationGuardAllowPrintToNetworkPrinters);
        $writer->writeBooleanValue('applicationGuardAllowPrintToPDF', $this->applicationGuardAllowPrintToPDF);
        $writer->writeBooleanValue('applicationGuardAllowPrintToXPS', $this->applicationGuardAllowPrintToXPS);
        $writer->writeEnumValue('applicationGuardBlockClipboardSharing', $this->applicationGuardBlockClipboardSharing);
        $writer->writeEnumValue('applicationGuardBlockFileTransfer', $this->applicationGuardBlockFileTransfer);
        $writer->writeBooleanValue('applicationGuardBlockNonEnterpriseContent', $this->applicationGuardBlockNonEnterpriseContent);
        $writer->writeBooleanValue('applicationGuardEnabled', $this->applicationGuardEnabled);
        $writer->writeBooleanValue('applicationGuardForceAuditing', $this->applicationGuardForceAuditing);
        $writer->writeEnumValue('appLockerApplicationControl', $this->appLockerApplicationControl);
        $writer->writeBooleanValue('bitLockerDisableWarningForOtherDiskEncryption', $this->bitLockerDisableWarningForOtherDiskEncryption);
        $writer->writeBooleanValue('bitLockerEnableStorageCardEncryptionOnMobile', $this->bitLockerEnableStorageCardEncryptionOnMobile);
        $writer->writeBooleanValue('bitLockerEncryptDevice', $this->bitLockerEncryptDevice);
        $writer->writeObjectValue('bitLockerRemovableDrivePolicy', $this->bitLockerRemovableDrivePolicy);
        $writer->writeCollectionOfPrimitiveValues('defenderAdditionalGuardedFolders', $this->defenderAdditionalGuardedFolders);
        $writer->writeCollectionOfPrimitiveValues('defenderAttackSurfaceReductionExcludedPaths', $this->defenderAttackSurfaceReductionExcludedPaths);
        $writer->writeBinaryContent('defenderExploitProtectionXml', $this->defenderExploitProtectionXml);
        $writer->writeStringValue('defenderExploitProtectionXmlFileName', $this->defenderExploitProtectionXmlFileName);
        $writer->writeCollectionOfPrimitiveValues('defenderGuardedFoldersAllowedAppPaths', $this->defenderGuardedFoldersAllowedAppPaths);
        $writer->writeBooleanValue('defenderSecurityCenterBlockExploitProtectionOverride', $this->defenderSecurityCenterBlockExploitProtectionOverride);
        $writer->writeBooleanValue('firewallBlockStatefulFTP', $this->firewallBlockStatefulFTP);
        $writer->writeEnumValue('firewallCertificateRevocationListCheckMethod', $this->firewallCertificateRevocationListCheckMethod);
        $writer->writeIntegerValue('firewallIdleTimeoutForSecurityAssociationInSeconds', $this->firewallIdleTimeoutForSecurityAssociationInSeconds);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowDHCP', $this->firewallIPSecExemptionsAllowDHCP);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowICMP', $this->firewallIPSecExemptionsAllowICMP);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowNeighborDiscovery', $this->firewallIPSecExemptionsAllowNeighborDiscovery);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowRouterDiscovery', $this->firewallIPSecExemptionsAllowRouterDiscovery);
        $writer->writeBooleanValue('firewallMergeKeyingModuleSettings', $this->firewallMergeKeyingModuleSettings);
        $writer->writeEnumValue('firewallPacketQueueingMethod', $this->firewallPacketQueueingMethod);
        $writer->writeEnumValue('firewallPreSharedKeyEncodingMethod', $this->firewallPreSharedKeyEncodingMethod);
        $writer->writeObjectValue('firewallProfileDomain', $this->firewallProfileDomain);
        $writer->writeObjectValue('firewallProfilePrivate', $this->firewallProfilePrivate);
        $writer->writeObjectValue('firewallProfilePublic', $this->firewallProfilePublic);
        $writer->writeBooleanValue('smartScreenBlockOverrideForFiles', $this->smartScreenBlockOverrideForFiles);
        $writer->writeBooleanValue('smartScreenEnableInShell', $this->smartScreenEnableInShell);
    }

    /**
     * Sets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     *  @param bool|null $value Value to set for the applicationGuardAllowPersistence property.
    */
    public function setApplicationGuardAllowPersistence(?bool $value ): void {
        $this->applicationGuardAllowPersistence = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToLocalPrinters property.
    */
    public function setApplicationGuardAllowPrintToLocalPrinters(?bool $value ): void {
        $this->applicationGuardAllowPrintToLocalPrinters = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToNetworkPrinters property.
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters(?bool $value ): void {
        $this->applicationGuardAllowPrintToNetworkPrinters = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToPDF property.
    */
    public function setApplicationGuardAllowPrintToPDF(?bool $value ): void {
        $this->applicationGuardAllowPrintToPDF = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToXPS property.
    */
    public function setApplicationGuardAllowPrintToXPS(?bool $value ): void {
        $this->applicationGuardAllowPrintToXPS = $value;
    }

    /**
     * Sets the applicationGuardBlockClipboardSharing property value. Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
     *  @param ApplicationGuardBlockClipboardSharingType|null $value Value to set for the applicationGuardBlockClipboardSharing property.
    */
    public function setApplicationGuardBlockClipboardSharing(?ApplicationGuardBlockClipboardSharingType $value ): void {
        $this->applicationGuardBlockClipboardSharing = $value;
    }

    /**
     * Sets the applicationGuardBlockFileTransfer property value. Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
     *  @param ApplicationGuardBlockFileTransferType|null $value Value to set for the applicationGuardBlockFileTransfer property.
    */
    public function setApplicationGuardBlockFileTransfer(?ApplicationGuardBlockFileTransferType $value ): void {
        $this->applicationGuardBlockFileTransfer = $value;
    }

    /**
     * Sets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     *  @param bool|null $value Value to set for the applicationGuardBlockNonEnterpriseContent property.
    */
    public function setApplicationGuardBlockNonEnterpriseContent(?bool $value ): void {
        $this->applicationGuardBlockNonEnterpriseContent = $value;
    }

    /**
     * Sets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     *  @param bool|null $value Value to set for the applicationGuardEnabled property.
    */
    public function setApplicationGuardEnabled(?bool $value ): void {
        $this->applicationGuardEnabled = $value;
    }

    /**
     * Sets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     *  @param bool|null $value Value to set for the applicationGuardForceAuditing property.
    */
    public function setApplicationGuardForceAuditing(?bool $value ): void {
        $this->applicationGuardForceAuditing = $value;
    }

    /**
     * Sets the appLockerApplicationControl property value. Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
     *  @param AppLockerApplicationControlType|null $value Value to set for the appLockerApplicationControl property.
    */
    public function setAppLockerApplicationControl(?AppLockerApplicationControlType $value ): void {
        $this->appLockerApplicationControl = $value;
    }

    /**
     * Sets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     *  @param bool|null $value Value to set for the bitLockerDisableWarningForOtherDiskEncryption property.
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption(?bool $value ): void {
        $this->bitLockerDisableWarningForOtherDiskEncryption = $value;
    }

    /**
     * Sets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     *  @param bool|null $value Value to set for the bitLockerEnableStorageCardEncryptionOnMobile property.
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile(?bool $value ): void {
        $this->bitLockerEnableStorageCardEncryptionOnMobile = $value;
    }

    /**
     * Sets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     *  @param bool|null $value Value to set for the bitLockerEncryptDevice property.
    */
    public function setBitLockerEncryptDevice(?bool $value ): void {
        $this->bitLockerEncryptDevice = $value;
    }

    /**
     * Sets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     *  @param BitLockerRemovableDrivePolicy|null $value Value to set for the bitLockerRemovableDrivePolicy property.
    */
    public function setBitLockerRemovableDrivePolicy(?BitLockerRemovableDrivePolicy $value ): void {
        $this->bitLockerRemovableDrivePolicy = $value;
    }

    /**
     * Sets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     *  @param array<string>|null $value Value to set for the defenderAdditionalGuardedFolders property.
    */
    public function setDefenderAdditionalGuardedFolders(?array $value ): void {
        $this->defenderAdditionalGuardedFolders = $value;
    }

    /**
     * Sets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     *  @param array<string>|null $value Value to set for the defenderAttackSurfaceReductionExcludedPaths property.
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths(?array $value ): void {
        $this->defenderAttackSurfaceReductionExcludedPaths = $value;
    }

    /**
     * Sets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     *  @param StreamInterface|null $value Value to set for the defenderExploitProtectionXml property.
    */
    public function setDefenderExploitProtectionXml(?StreamInterface $value ): void {
        $this->defenderExploitProtectionXml = $value;
    }

    /**
     * Sets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     *  @param string|null $value Value to set for the defenderExploitProtectionXmlFileName property.
    */
    public function setDefenderExploitProtectionXmlFileName(?string $value ): void {
        $this->defenderExploitProtectionXmlFileName = $value;
    }

    /**
     * Sets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     *  @param array<string>|null $value Value to set for the defenderGuardedFoldersAllowedAppPaths property.
    */
    public function setDefenderGuardedFoldersAllowedAppPaths(?array $value ): void {
        $this->defenderGuardedFoldersAllowedAppPaths = $value;
    }

    /**
     * Sets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     *  @param bool|null $value Value to set for the defenderSecurityCenterBlockExploitProtectionOverride property.
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride(?bool $value ): void {
        $this->defenderSecurityCenterBlockExploitProtectionOverride = $value;
    }

    /**
     * Sets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     *  @param bool|null $value Value to set for the firewallBlockStatefulFTP property.
    */
    public function setFirewallBlockStatefulFTP(?bool $value ): void {
        $this->firewallBlockStatefulFTP = $value;
    }

    /**
     * Sets the firewallCertificateRevocationListCheckMethod property value. Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
     *  @param FirewallCertificateRevocationListCheckMethodType|null $value Value to set for the firewallCertificateRevocationListCheckMethod property.
    */
    public function setFirewallCertificateRevocationListCheckMethod(?FirewallCertificateRevocationListCheckMethodType $value ): void {
        $this->firewallCertificateRevocationListCheckMethod = $value;
    }

    /**
     * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     *  @param int|null $value Value to set for the firewallIdleTimeoutForSecurityAssociationInSeconds property.
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds(?int $value ): void {
        $this->firewallIdleTimeoutForSecurityAssociationInSeconds = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowDHCP property.
    */
    public function setFirewallIPSecExemptionsAllowDHCP(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowDHCP = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowICMP property.
    */
    public function setFirewallIPSecExemptionsAllowICMP(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowICMP = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowNeighborDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowNeighborDiscovery = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowRouterDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowRouterDiscovery = $value;
    }

    /**
     * Sets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     *  @param bool|null $value Value to set for the firewallMergeKeyingModuleSettings property.
    */
    public function setFirewallMergeKeyingModuleSettings(?bool $value ): void {
        $this->firewallMergeKeyingModuleSettings = $value;
    }

    /**
     * Sets the firewallPacketQueueingMethod property value. Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
     *  @param FirewallPacketQueueingMethodType|null $value Value to set for the firewallPacketQueueingMethod property.
    */
    public function setFirewallPacketQueueingMethod(?FirewallPacketQueueingMethodType $value ): void {
        $this->firewallPacketQueueingMethod = $value;
    }

    /**
     * Sets the firewallPreSharedKeyEncodingMethod property value. Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
     *  @param FirewallPreSharedKeyEncodingMethodType|null $value Value to set for the firewallPreSharedKeyEncodingMethod property.
    */
    public function setFirewallPreSharedKeyEncodingMethod(?FirewallPreSharedKeyEncodingMethodType $value ): void {
        $this->firewallPreSharedKeyEncodingMethod = $value;
    }

    /**
     * Sets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfileDomain property.
    */
    public function setFirewallProfileDomain(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfileDomain = $value;
    }

    /**
     * Sets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePrivate property.
    */
    public function setFirewallProfilePrivate(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfilePrivate = $value;
    }

    /**
     * Sets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePublic property.
    */
    public function setFirewallProfilePublic(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfilePublic = $value;
    }

    /**
     * Sets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     *  @param bool|null $value Value to set for the smartScreenBlockOverrideForFiles property.
    */
    public function setSmartScreenBlockOverrideForFiles(?bool $value ): void {
        $this->smartScreenBlockOverrideForFiles = $value;
    }

    /**
     * Sets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     *  @param bool|null $value Value to set for the smartScreenEnableInShell property.
    */
    public function setSmartScreenEnableInShell(?bool $value ): void {
        $this->smartScreenEnableInShell = $value;
    }

}
