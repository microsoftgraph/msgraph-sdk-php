<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAbs\AbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAccrInt\AccrIntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAccrIntM\AccrIntMRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcos\AcosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcosh\AcoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcot\AcotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcoth\AcothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAmorDegrc\AmorDegrcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAmorLinc\AmorLincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAnd\AndRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphArabic\ArabicRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAreas\AreasRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsc\AscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsin\AsinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsinh\AsinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtan\AtanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtan2\Atan2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtanh\AtanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAveDev\AveDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverage\AverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageA\AverageARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageIf\AverageIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageIfs\AverageIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBahtText\BahtTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBase\BaseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselI\BesselIRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselJ\BesselJRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselK\BesselKRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselY\BesselYRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBeta_Dist\Beta_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBeta_Inv\Beta_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Dec\Bin2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Hex\Bin2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Oct\Bin2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Dist_Range\Binom_Dist_RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Dist\Binom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Inv\Binom_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitand\BitandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitlshift\BitlshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitor\BitorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitrshift\BitrshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitxor\BitxorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCeiling_Math\Ceiling_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCeiling_Precise\Ceiling_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChar\CharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Dist_RT\ChiSq_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Dist\ChiSq_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Inv_RT\ChiSq_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Inv\ChiSq_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChoose\ChooseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphClean\CleanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCode\CodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphColumns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCombin\CombinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCombina\CombinaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphComplex\ComplexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConcatenate\ConcatenateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConfidence_Norm\Confidence_NormRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConfidence_T\Confidence_TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConvert\ConvertRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCos\CosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCosh\CoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCot\CotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoth\CothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCount\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountA\CountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountBlank\CountBlankRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountIf\CountIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountIfs\CountIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDayBs\CoupDayBsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDays\CoupDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDaysNc\CoupDaysNcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupNcd\CoupNcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupNum\CoupNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupPcd\CoupPcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCsc\CscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCsch\CschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCumIPmt\CumIPmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCumPrinc\CumPrincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDate\DateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDatevalue\DatevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDaverage\DaverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDay\DayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDays\DaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDays360\Days360RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDb\DbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDbcs\DbcsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDcount\DcountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDcountA\DcountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDdb\DdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Bin\Dec2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Hex\Dec2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Oct\Dec2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDecimal\DecimalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDegrees\DegreesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDelta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDevSq\DevSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDget\DgetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDisc\DiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDmax\DmaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDmin\DminRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollar\DollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollarDe\DollarDeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollarFr\DollarFrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDproduct\DproductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDstDev\DstDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDstDevP\DstDevPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDsum\DsumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDuration\DurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDvar\DvarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDvarP\DvarPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEcma_Ceiling\Ecma_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEdate\EdateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEffect\EffectRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEoMonth\EoMonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErf_Precise\Erf_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErf\ErfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErfC_Precise\ErfC_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErfC\ErfCRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphError_Type\Error_TypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEven\EvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExact\ExactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExp\ExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExpon_Dist\Expon_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Dist_RT\F_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Dist\F_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Inv_RT\F_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Inv\F_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFact\FactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFactDouble\FactDoubleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFalse\FalseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFind\FindRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFindB\FindBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFisher\FisherRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFisherInv\FisherInvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFixed\FixedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFloor_Math\Floor_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFloor_Precise\Floor_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFv\FvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFvschedule\FvscheduleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma_Dist\Gamma_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma_Inv\Gamma_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma\GammaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGammaLn_Precise\GammaLn_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGammaLn\GammaLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGauss\GaussRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGcd\GcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGeoMean\GeoMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGeStep\GeStepRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHarMean\HarMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Bin\Hex2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Dec\Hex2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Oct\Hex2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHlookup\HlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHour\HourRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHyperlink\HyperlinkRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHypGeom_Dist\HypGeom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIf\IfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImAbs\ImAbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImaginary\ImaginaryRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImArgument\ImArgumentRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImConjugate\ImConjugateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCos\ImCosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCosh\ImCoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCot\ImCotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCsc\ImCscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCsch\ImCschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImDiv\ImDivRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImExp\ImExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLn\ImLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLog10\ImLog10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLog2\ImLog2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImPower\ImPowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImProduct\ImProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImReal\ImRealRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSec\ImSecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSech\ImSechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSin\ImSinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSinh\ImSinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSqrt\ImSqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSub\ImSubRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSum\ImSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImTan\ImTanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphInt\IntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIntRate\IntRateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIpmt\IpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIrr\IrrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsErr\IsErrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsError\IsErrorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsEven\IsEvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsFormula\IsFormulaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsLogical\IsLogicalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNA\IsNARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNonText\IsNonTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNumber\IsNumberRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIso_Ceiling\Iso_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsOdd\IsOddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsoWeekNum\IsoWeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIspmt\IspmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsref\IsrefRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsText\IsTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphKurt\KurtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLarge\LargeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLcm\LcmRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLeft\LeftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLeftb\LeftbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLen\LenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLenb\LenbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLn\LnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLog\LogRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLog10\Log10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLogNorm_Dist\LogNorm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLogNorm_Inv\LogNorm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLookup\LookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLower\LowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMatch\MatchRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMax\MaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMaxA\MaxARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMduration\MdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMedian\MedianRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMid\MidRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMidb\MidbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMin\MinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMinA\MinARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMinute\MinuteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMirr\MirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMod\ModRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMonth\MonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMround\MroundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMultiNomial\MultiNomialRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphN\NRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNa\NaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNegBinom_Dist\NegBinom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNetworkDays_Intl\NetworkDays_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNetworkDays\NetworkDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNominal\NominalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_Dist\Norm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_Inv\Norm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_S_Dist\Norm_S_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_S_Inv\Norm_S_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNot\NotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNow\NowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNper\NperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNpv\NpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNumberValue\NumberValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Bin\Oct2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Dec\Oct2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Hex\Oct2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOdd\OddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddFPrice\OddFPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddFYield\OddFYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddLPrice\OddLPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddLYield\OddLYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOr\OrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPduration\PdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentile_Exc\Percentile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentile_Inc\Percentile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentRank_Exc\PercentRank_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentRank_Inc\PercentRank_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPermut\PermutRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPermutationa\PermutationaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPhi\PhiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPi\PiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPmt\PmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPoisson_Dist\Poisson_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPower\PowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPpmt\PpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPrice\PriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPriceDisc\PriceDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPriceMat\PriceMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphProduct\ProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphProper\ProperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPv\PvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuartile_Exc\Quartile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuartile_Inc\Quartile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuotient\QuotientRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRadians\RadiansRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRand\RandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRandBetween\RandBetweenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRank_Avg\Rank_AvgRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRank_Eq\Rank_EqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRate\RateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReceived\ReceivedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReplace\ReplaceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReplaceB\ReplaceBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRept\ReptRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRight\RightRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRightb\RightbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoman\RomanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRound\RoundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoundDown\RoundDownRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoundUp\RoundUpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRows\RowsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRri\RriRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSec\SecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSech\SechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSecond\SecondRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSeriesSum\SeriesSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSheet\SheetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSheets\SheetsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSign\SignRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSin\SinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSinh\SinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSkew_p\Skew_pRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSkew\SkewRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSln\SlnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSmall\SmallRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSqrt\SqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSqrtPi\SqrtPiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStandardize\StandardizeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDev_P\StDev_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDev_S\StDev_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDevA\StDevARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDevPA\StDevPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSubstitute\SubstituteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSubtotal\SubtotalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSum\SumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumIf\SumIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumIfs\SumIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumSq\SumSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSyd\SydRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist_2T\T_Dist_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist_RT\T_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist\T_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Inv_2T\T_Inv_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Inv\T_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT\TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTan\TanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTanh\TanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillEq\TbillEqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillPrice\TbillPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillYield\TbillYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphText\TextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTime\TimeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTimevalue\TimevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphToday\TodayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrim\TrimRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrimMean\TrimMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrue\TrueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrunc\TruncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphType\TypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUnichar\UnicharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUnicode\UnicodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUpper\UpperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUsdollar\UsdollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphValue\ValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVar_P\Var_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVar_S\Var_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVarA\VarARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVarPA\VarPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVdb\VdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVlookup\VlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeekday\WeekdayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeekNum\WeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeibull_Dist\Weibull_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWorkDay_Intl\WorkDay_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWorkDay\WorkDayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXirr\XirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXnpv\XnpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXor\XorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYear\YearRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYearFrac\YearFracRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYield\YieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYieldDisc\YieldDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYieldMat\YieldMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphZ_Test\Z_TestRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookFunctions;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the functions property of the microsoft.graph.workbook entity.
*/
class FunctionsRequestBuilder 
{
    /**
     * Provides operations to call the abs method.
    */
    public function microsoftGraphAbs(): AbsRequestBuilder {
        return new AbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrInt method.
    */
    public function microsoftGraphAccrInt(): AccrIntRequestBuilder {
        return new AccrIntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrIntM method.
    */
    public function microsoftGraphAccrIntM(): AccrIntMRequestBuilder {
        return new AccrIntMRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acos method.
    */
    public function microsoftGraphAcos(): AcosRequestBuilder {
        return new AcosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acosh method.
    */
    public function microsoftGraphAcosh(): AcoshRequestBuilder {
        return new AcoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acot method.
    */
    public function microsoftGraphAcot(): AcotRequestBuilder {
        return new AcotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acoth method.
    */
    public function microsoftGraphAcoth(): AcothRequestBuilder {
        return new AcothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorDegrc method.
    */
    public function microsoftGraphAmorDegrc(): AmorDegrcRequestBuilder {
        return new AmorDegrcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorLinc method.
    */
    public function microsoftGraphAmorLinc(): AmorLincRequestBuilder {
        return new AmorLincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the and method.
    */
    public function microsoftGraphAnd(): AndRequestBuilder {
        return new AndRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the arabic method.
    */
    public function microsoftGraphArabic(): ArabicRequestBuilder {
        return new ArabicRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the areas method.
    */
    public function microsoftGraphAreas(): AreasRequestBuilder {
        return new AreasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asc method.
    */
    public function microsoftGraphAsc(): AscRequestBuilder {
        return new AscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asin method.
    */
    public function microsoftGraphAsin(): AsinRequestBuilder {
        return new AsinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asinh method.
    */
    public function microsoftGraphAsinh(): AsinhRequestBuilder {
        return new AsinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan method.
    */
    public function microsoftGraphAtan(): AtanRequestBuilder {
        return new AtanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan2 method.
    */
    public function microsoftGraphAtan2(): Atan2RequestBuilder {
        return new Atan2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atanh method.
    */
    public function microsoftGraphAtanh(): AtanhRequestBuilder {
        return new AtanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the aveDev method.
    */
    public function microsoftGraphAveDev(): AveDevRequestBuilder {
        return new AveDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the average method.
    */
    public function microsoftGraphAverage(): AverageRequestBuilder {
        return new AverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageA method.
    */
    public function microsoftGraphAverageA(): AverageARequestBuilder {
        return new AverageARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIf method.
    */
    public function microsoftGraphAverageIf(): AverageIfRequestBuilder {
        return new AverageIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIfs method.
    */
    public function microsoftGraphAverageIfs(): AverageIfsRequestBuilder {
        return new AverageIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bahtText method.
    */
    public function microsoftGraphBahtText(): BahtTextRequestBuilder {
        return new BahtTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the base method.
    */
    public function microsoftGraphBase(): BaseRequestBuilder {
        return new BaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselI method.
    */
    public function microsoftGraphBesselI(): BesselIRequestBuilder {
        return new BesselIRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselJ method.
    */
    public function microsoftGraphBesselJ(): BesselJRequestBuilder {
        return new BesselJRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselK method.
    */
    public function microsoftGraphBesselK(): BesselKRequestBuilder {
        return new BesselKRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselY method.
    */
    public function microsoftGraphBesselY(): BesselYRequestBuilder {
        return new BesselYRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Dist method.
    */
    public function microsoftGraphBeta_Dist(): Beta_DistRequestBuilder {
        return new Beta_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Inv method.
    */
    public function microsoftGraphBeta_Inv(): Beta_InvRequestBuilder {
        return new Beta_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Dec method.
    */
    public function microsoftGraphBin2Dec(): Bin2DecRequestBuilder {
        return new Bin2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Hex method.
    */
    public function microsoftGraphBin2Hex(): Bin2HexRequestBuilder {
        return new Bin2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Oct method.
    */
    public function microsoftGraphBin2Oct(): Bin2OctRequestBuilder {
        return new Bin2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist method.
    */
    public function microsoftGraphBinom_Dist(): Binom_DistRequestBuilder {
        return new Binom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist_Range method.
    */
    public function microsoftGraphBinom_Dist_Range(): Binom_Dist_RangeRequestBuilder {
        return new Binom_Dist_RangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Inv method.
    */
    public function microsoftGraphBinom_Inv(): Binom_InvRequestBuilder {
        return new Binom_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitand method.
    */
    public function microsoftGraphBitand(): BitandRequestBuilder {
        return new BitandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitlshift method.
    */
    public function microsoftGraphBitlshift(): BitlshiftRequestBuilder {
        return new BitlshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitor method.
    */
    public function microsoftGraphBitor(): BitorRequestBuilder {
        return new BitorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitrshift method.
    */
    public function microsoftGraphBitrshift(): BitrshiftRequestBuilder {
        return new BitrshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitxor method.
    */
    public function microsoftGraphBitxor(): BitxorRequestBuilder {
        return new BitxorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Math method.
    */
    public function microsoftGraphCeiling_Math(): Ceiling_MathRequestBuilder {
        return new Ceiling_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Precise method.
    */
    public function microsoftGraphCeiling_Precise(): Ceiling_PreciseRequestBuilder {
        return new Ceiling_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the char method.
    */
    public function microsoftGraphChar(): CharRequestBuilder {
        return new CharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist method.
    */
    public function microsoftGraphChiSq_Dist(): ChiSq_DistRequestBuilder {
        return new ChiSq_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist_RT method.
    */
    public function microsoftGraphChiSq_Dist_RT(): ChiSq_Dist_RTRequestBuilder {
        return new ChiSq_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv method.
    */
    public function microsoftGraphChiSq_Inv(): ChiSq_InvRequestBuilder {
        return new ChiSq_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv_RT method.
    */
    public function microsoftGraphChiSq_Inv_RT(): ChiSq_Inv_RTRequestBuilder {
        return new ChiSq_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the choose method.
    */
    public function microsoftGraphChoose(): ChooseRequestBuilder {
        return new ChooseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clean method.
    */
    public function microsoftGraphClean(): CleanRequestBuilder {
        return new CleanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the code method.
    */
    public function microsoftGraphCode(): CodeRequestBuilder {
        return new CodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the columns method.
    */
    public function microsoftGraphColumns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combin method.
    */
    public function microsoftGraphCombin(): CombinRequestBuilder {
        return new CombinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combina method.
    */
    public function microsoftGraphCombina(): CombinaRequestBuilder {
        return new CombinaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the complex method.
    */
    public function microsoftGraphComplex(): ComplexRequestBuilder {
        return new ComplexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the concatenate method.
    */
    public function microsoftGraphConcatenate(): ConcatenateRequestBuilder {
        return new ConcatenateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_Norm method.
    */
    public function microsoftGraphConfidence_Norm(): Confidence_NormRequestBuilder {
        return new Confidence_NormRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_T method.
    */
    public function microsoftGraphConfidence_T(): Confidence_TRequestBuilder {
        return new Confidence_TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the convert method.
    */
    public function microsoftGraphConvert(): ConvertRequestBuilder {
        return new ConvertRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cos method.
    */
    public function microsoftGraphCos(): CosRequestBuilder {
        return new CosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cosh method.
    */
    public function microsoftGraphCosh(): CoshRequestBuilder {
        return new CoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cot method.
    */
    public function microsoftGraphCot(): CotRequestBuilder {
        return new CotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coth method.
    */
    public function microsoftGraphCoth(): CothRequestBuilder {
        return new CothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the count method.
    */
    public function microsoftGraphCount(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countA method.
    */
    public function microsoftGraphCountA(): CountARequestBuilder {
        return new CountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countBlank method.
    */
    public function microsoftGraphCountBlank(): CountBlankRequestBuilder {
        return new CountBlankRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIf method.
    */
    public function microsoftGraphCountIf(): CountIfRequestBuilder {
        return new CountIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIfs method.
    */
    public function microsoftGraphCountIfs(): CountIfsRequestBuilder {
        return new CountIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDayBs method.
    */
    public function microsoftGraphCoupDayBs(): CoupDayBsRequestBuilder {
        return new CoupDayBsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDays method.
    */
    public function microsoftGraphCoupDays(): CoupDaysRequestBuilder {
        return new CoupDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDaysNc method.
    */
    public function microsoftGraphCoupDaysNc(): CoupDaysNcRequestBuilder {
        return new CoupDaysNcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNcd method.
    */
    public function microsoftGraphCoupNcd(): CoupNcdRequestBuilder {
        return new CoupNcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNum method.
    */
    public function microsoftGraphCoupNum(): CoupNumRequestBuilder {
        return new CoupNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupPcd method.
    */
    public function microsoftGraphCoupPcd(): CoupPcdRequestBuilder {
        return new CoupPcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csc method.
    */
    public function microsoftGraphCsc(): CscRequestBuilder {
        return new CscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csch method.
    */
    public function microsoftGraphCsch(): CschRequestBuilder {
        return new CschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumIPmt method.
    */
    public function microsoftGraphCumIPmt(): CumIPmtRequestBuilder {
        return new CumIPmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumPrinc method.
    */
    public function microsoftGraphCumPrinc(): CumPrincRequestBuilder {
        return new CumPrincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the date method.
    */
    public function microsoftGraphDate(): DateRequestBuilder {
        return new DateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the datevalue method.
    */
    public function microsoftGraphDatevalue(): DatevalueRequestBuilder {
        return new DatevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the daverage method.
    */
    public function microsoftGraphDaverage(): DaverageRequestBuilder {
        return new DaverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the day method.
    */
    public function microsoftGraphDay(): DayRequestBuilder {
        return new DayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days method.
    */
    public function microsoftGraphDays(): DaysRequestBuilder {
        return new DaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days360 method.
    */
    public function microsoftGraphDays360(): Days360RequestBuilder {
        return new Days360RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the db method.
    */
    public function microsoftGraphDb(): DbRequestBuilder {
        return new DbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dbcs method.
    */
    public function microsoftGraphDbcs(): DbcsRequestBuilder {
        return new DbcsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcount method.
    */
    public function microsoftGraphDcount(): DcountRequestBuilder {
        return new DcountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcountA method.
    */
    public function microsoftGraphDcountA(): DcountARequestBuilder {
        return new DcountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ddb method.
    */
    public function microsoftGraphDdb(): DdbRequestBuilder {
        return new DdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Bin method.
    */
    public function microsoftGraphDec2Bin(): Dec2BinRequestBuilder {
        return new Dec2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Hex method.
    */
    public function microsoftGraphDec2Hex(): Dec2HexRequestBuilder {
        return new Dec2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Oct method.
    */
    public function microsoftGraphDec2Oct(): Dec2OctRequestBuilder {
        return new Dec2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decimal method.
    */
    public function microsoftGraphDecimal(): DecimalRequestBuilder {
        return new DecimalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the degrees method.
    */
    public function microsoftGraphDegrees(): DegreesRequestBuilder {
        return new DegreesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function microsoftGraphDelta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the devSq method.
    */
    public function microsoftGraphDevSq(): DevSqRequestBuilder {
        return new DevSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dget method.
    */
    public function microsoftGraphDget(): DgetRequestBuilder {
        return new DgetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disc method.
    */
    public function microsoftGraphDisc(): DiscRequestBuilder {
        return new DiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmax method.
    */
    public function microsoftGraphDmax(): DmaxRequestBuilder {
        return new DmaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmin method.
    */
    public function microsoftGraphDmin(): DminRequestBuilder {
        return new DminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollar method.
    */
    public function microsoftGraphDollar(): DollarRequestBuilder {
        return new DollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarDe method.
    */
    public function microsoftGraphDollarDe(): DollarDeRequestBuilder {
        return new DollarDeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarFr method.
    */
    public function microsoftGraphDollarFr(): DollarFrRequestBuilder {
        return new DollarFrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dproduct method.
    */
    public function microsoftGraphDproduct(): DproductRequestBuilder {
        return new DproductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDev method.
    */
    public function microsoftGraphDstDev(): DstDevRequestBuilder {
        return new DstDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDevP method.
    */
    public function microsoftGraphDstDevP(): DstDevPRequestBuilder {
        return new DstDevPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dsum method.
    */
    public function microsoftGraphDsum(): DsumRequestBuilder {
        return new DsumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the duration method.
    */
    public function microsoftGraphDuration(): DurationRequestBuilder {
        return new DurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvar method.
    */
    public function microsoftGraphDvar(): DvarRequestBuilder {
        return new DvarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvarP method.
    */
    public function microsoftGraphDvarP(): DvarPRequestBuilder {
        return new DvarPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ecma_Ceiling method.
    */
    public function microsoftGraphEcma_Ceiling(): Ecma_CeilingRequestBuilder {
        return new Ecma_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the edate method.
    */
    public function microsoftGraphEdate(): EdateRequestBuilder {
        return new EdateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the effect method.
    */
    public function microsoftGraphEffect(): EffectRequestBuilder {
        return new EffectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the eoMonth method.
    */
    public function microsoftGraphEoMonth(): EoMonthRequestBuilder {
        return new EoMonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf method.
    */
    public function microsoftGraphErf(): ErfRequestBuilder {
        return new ErfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf_Precise method.
    */
    public function microsoftGraphErf_Precise(): Erf_PreciseRequestBuilder {
        return new Erf_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC method.
    */
    public function microsoftGraphErfC(): ErfCRequestBuilder {
        return new ErfCRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC_Precise method.
    */
    public function microsoftGraphErfC_Precise(): ErfC_PreciseRequestBuilder {
        return new ErfC_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the error_Type method.
    */
    public function microsoftGraphError_Type(): Error_TypeRequestBuilder {
        return new Error_TypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the even method.
    */
    public function microsoftGraphEven(): EvenRequestBuilder {
        return new EvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exact method.
    */
    public function microsoftGraphExact(): ExactRequestBuilder {
        return new ExactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exp method.
    */
    public function microsoftGraphExp(): ExpRequestBuilder {
        return new ExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the expon_Dist method.
    */
    public function microsoftGraphExpon_Dist(): Expon_DistRequestBuilder {
        return new Expon_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist method.
    */
    public function microsoftGraphF_Dist(): F_DistRequestBuilder {
        return new F_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist_RT method.
    */
    public function microsoftGraphF_Dist_RT(): F_Dist_RTRequestBuilder {
        return new F_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv method.
    */
    public function microsoftGraphF_Inv(): F_InvRequestBuilder {
        return new F_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv_RT method.
    */
    public function microsoftGraphF_Inv_RT(): F_Inv_RTRequestBuilder {
        return new F_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fact method.
    */
    public function microsoftGraphFact(): FactRequestBuilder {
        return new FactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the factDouble method.
    */
    public function microsoftGraphFactDouble(): FactDoubleRequestBuilder {
        return new FactDoubleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the false method.
    */
    public function microsoftGraphFalse(): FalseRequestBuilder {
        return new FalseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the find method.
    */
    public function microsoftGraphFind(): FindRequestBuilder {
        return new FindRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findB method.
    */
    public function microsoftGraphFindB(): FindBRequestBuilder {
        return new FindBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisher method.
    */
    public function microsoftGraphFisher(): FisherRequestBuilder {
        return new FisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisherInv method.
    */
    public function microsoftGraphFisherInv(): FisherInvRequestBuilder {
        return new FisherInvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fixed method.
    */
    public function microsoftGraphFixed(): FixedRequestBuilder {
        return new FixedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Math method.
    */
    public function microsoftGraphFloor_Math(): Floor_MathRequestBuilder {
        return new Floor_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Precise method.
    */
    public function microsoftGraphFloor_Precise(): Floor_PreciseRequestBuilder {
        return new Floor_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fv method.
    */
    public function microsoftGraphFv(): FvRequestBuilder {
        return new FvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fvschedule method.
    */
    public function microsoftGraphFvschedule(): FvscheduleRequestBuilder {
        return new FvscheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma method.
    */
    public function microsoftGraphGamma(): GammaRequestBuilder {
        return new GammaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Dist method.
    */
    public function microsoftGraphGamma_Dist(): Gamma_DistRequestBuilder {
        return new Gamma_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Inv method.
    */
    public function microsoftGraphGamma_Inv(): Gamma_InvRequestBuilder {
        return new Gamma_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn method.
    */
    public function microsoftGraphGammaLn(): GammaLnRequestBuilder {
        return new GammaLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn_Precise method.
    */
    public function microsoftGraphGammaLn_Precise(): GammaLn_PreciseRequestBuilder {
        return new GammaLn_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gauss method.
    */
    public function microsoftGraphGauss(): GaussRequestBuilder {
        return new GaussRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gcd method.
    */
    public function microsoftGraphGcd(): GcdRequestBuilder {
        return new GcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geoMean method.
    */
    public function microsoftGraphGeoMean(): GeoMeanRequestBuilder {
        return new GeoMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geStep method.
    */
    public function microsoftGraphGeStep(): GeStepRequestBuilder {
        return new GeStepRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the harMean method.
    */
    public function microsoftGraphHarMean(): HarMeanRequestBuilder {
        return new HarMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Bin method.
    */
    public function microsoftGraphHex2Bin(): Hex2BinRequestBuilder {
        return new Hex2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Dec method.
    */
    public function microsoftGraphHex2Dec(): Hex2DecRequestBuilder {
        return new Hex2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Oct method.
    */
    public function microsoftGraphHex2Oct(): Hex2OctRequestBuilder {
        return new Hex2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hlookup method.
    */
    public function microsoftGraphHlookup(): HlookupRequestBuilder {
        return new HlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hour method.
    */
    public function microsoftGraphHour(): HourRequestBuilder {
        return new HourRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hyperlink method.
    */
    public function microsoftGraphHyperlink(): HyperlinkRequestBuilder {
        return new HyperlinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hypGeom_Dist method.
    */
    public function microsoftGraphHypGeom_Dist(): HypGeom_DistRequestBuilder {
        return new HypGeom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the if method.
    */
    public function microsoftGraphIf(): IfRequestBuilder {
        return new IfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imAbs method.
    */
    public function microsoftGraphImAbs(): ImAbsRequestBuilder {
        return new ImAbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imaginary method.
    */
    public function microsoftGraphImaginary(): ImaginaryRequestBuilder {
        return new ImaginaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imArgument method.
    */
    public function microsoftGraphImArgument(): ImArgumentRequestBuilder {
        return new ImArgumentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imConjugate method.
    */
    public function microsoftGraphImConjugate(): ImConjugateRequestBuilder {
        return new ImConjugateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCos method.
    */
    public function microsoftGraphImCos(): ImCosRequestBuilder {
        return new ImCosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCosh method.
    */
    public function microsoftGraphImCosh(): ImCoshRequestBuilder {
        return new ImCoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCot method.
    */
    public function microsoftGraphImCot(): ImCotRequestBuilder {
        return new ImCotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsc method.
    */
    public function microsoftGraphImCsc(): ImCscRequestBuilder {
        return new ImCscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsch method.
    */
    public function microsoftGraphImCsch(): ImCschRequestBuilder {
        return new ImCschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imDiv method.
    */
    public function microsoftGraphImDiv(): ImDivRequestBuilder {
        return new ImDivRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imExp method.
    */
    public function microsoftGraphImExp(): ImExpRequestBuilder {
        return new ImExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLn method.
    */
    public function microsoftGraphImLn(): ImLnRequestBuilder {
        return new ImLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog10 method.
    */
    public function microsoftGraphImLog10(): ImLog10RequestBuilder {
        return new ImLog10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog2 method.
    */
    public function microsoftGraphImLog2(): ImLog2RequestBuilder {
        return new ImLog2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imPower method.
    */
    public function microsoftGraphImPower(): ImPowerRequestBuilder {
        return new ImPowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imProduct method.
    */
    public function microsoftGraphImProduct(): ImProductRequestBuilder {
        return new ImProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imReal method.
    */
    public function microsoftGraphImReal(): ImRealRequestBuilder {
        return new ImRealRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSec method.
    */
    public function microsoftGraphImSec(): ImSecRequestBuilder {
        return new ImSecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSech method.
    */
    public function microsoftGraphImSech(): ImSechRequestBuilder {
        return new ImSechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSin method.
    */
    public function microsoftGraphImSin(): ImSinRequestBuilder {
        return new ImSinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSinh method.
    */
    public function microsoftGraphImSinh(): ImSinhRequestBuilder {
        return new ImSinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSqrt method.
    */
    public function microsoftGraphImSqrt(): ImSqrtRequestBuilder {
        return new ImSqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSub method.
    */
    public function microsoftGraphImSub(): ImSubRequestBuilder {
        return new ImSubRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSum method.
    */
    public function microsoftGraphImSum(): ImSumRequestBuilder {
        return new ImSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imTan method.
    */
    public function microsoftGraphImTan(): ImTanRequestBuilder {
        return new ImTanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the int method.
    */
    public function microsoftGraphInt(): IntRequestBuilder {
        return new IntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the intRate method.
    */
    public function microsoftGraphIntRate(): IntRateRequestBuilder {
        return new IntRateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ipmt method.
    */
    public function microsoftGraphIpmt(): IpmtRequestBuilder {
        return new IpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the irr method.
    */
    public function microsoftGraphIrr(): IrrRequestBuilder {
        return new IrrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isErr method.
    */
    public function microsoftGraphIsErr(): IsErrRequestBuilder {
        return new IsErrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isError method.
    */
    public function microsoftGraphIsError(): IsErrorRequestBuilder {
        return new IsErrorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isEven method.
    */
    public function microsoftGraphIsEven(): IsEvenRequestBuilder {
        return new IsEvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isFormula method.
    */
    public function microsoftGraphIsFormula(): IsFormulaRequestBuilder {
        return new IsFormulaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isLogical method.
    */
    public function microsoftGraphIsLogical(): IsLogicalRequestBuilder {
        return new IsLogicalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNA method.
    */
    public function microsoftGraphIsNA(): IsNARequestBuilder {
        return new IsNARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNonText method.
    */
    public function microsoftGraphIsNonText(): IsNonTextRequestBuilder {
        return new IsNonTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNumber method.
    */
    public function microsoftGraphIsNumber(): IsNumberRequestBuilder {
        return new IsNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the iso_Ceiling method.
    */
    public function microsoftGraphIso_Ceiling(): Iso_CeilingRequestBuilder {
        return new Iso_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isOdd method.
    */
    public function microsoftGraphIsOdd(): IsOddRequestBuilder {
        return new IsOddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isoWeekNum method.
    */
    public function microsoftGraphIsoWeekNum(): IsoWeekNumRequestBuilder {
        return new IsoWeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ispmt method.
    */
    public function microsoftGraphIspmt(): IspmtRequestBuilder {
        return new IspmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isref method.
    */
    public function microsoftGraphIsref(): IsrefRequestBuilder {
        return new IsrefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isText method.
    */
    public function microsoftGraphIsText(): IsTextRequestBuilder {
        return new IsTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the kurt method.
    */
    public function microsoftGraphKurt(): KurtRequestBuilder {
        return new KurtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the large method.
    */
    public function microsoftGraphLarge(): LargeRequestBuilder {
        return new LargeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lcm method.
    */
    public function microsoftGraphLcm(): LcmRequestBuilder {
        return new LcmRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the left method.
    */
    public function microsoftGraphLeft(): LeftRequestBuilder {
        return new LeftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the leftb method.
    */
    public function microsoftGraphLeftb(): LeftbRequestBuilder {
        return new LeftbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the len method.
    */
    public function microsoftGraphLen(): LenRequestBuilder {
        return new LenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lenb method.
    */
    public function microsoftGraphLenb(): LenbRequestBuilder {
        return new LenbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ln method.
    */
    public function microsoftGraphLn(): LnRequestBuilder {
        return new LnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log method.
    */
    public function microsoftGraphLog(): LogRequestBuilder {
        return new LogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log10 method.
    */
    public function microsoftGraphLog10(): Log10RequestBuilder {
        return new Log10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Dist method.
    */
    public function microsoftGraphLogNorm_Dist(): LogNorm_DistRequestBuilder {
        return new LogNorm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Inv method.
    */
    public function microsoftGraphLogNorm_Inv(): LogNorm_InvRequestBuilder {
        return new LogNorm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lookup method.
    */
    public function microsoftGraphLookup(): LookupRequestBuilder {
        return new LookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lower method.
    */
    public function microsoftGraphLower(): LowerRequestBuilder {
        return new LowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the match method.
    */
    public function microsoftGraphMatch(): MatchRequestBuilder {
        return new MatchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the max method.
    */
    public function microsoftGraphMax(): MaxRequestBuilder {
        return new MaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the maxA method.
    */
    public function microsoftGraphMaxA(): MaxARequestBuilder {
        return new MaxARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mduration method.
    */
    public function microsoftGraphMduration(): MdurationRequestBuilder {
        return new MdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the median method.
    */
    public function microsoftGraphMedian(): MedianRequestBuilder {
        return new MedianRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mid method.
    */
    public function microsoftGraphMid(): MidRequestBuilder {
        return new MidRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the midb method.
    */
    public function microsoftGraphMidb(): MidbRequestBuilder {
        return new MidbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the min method.
    */
    public function microsoftGraphMin(): MinRequestBuilder {
        return new MinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minA method.
    */
    public function microsoftGraphMinA(): MinARequestBuilder {
        return new MinARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minute method.
    */
    public function microsoftGraphMinute(): MinuteRequestBuilder {
        return new MinuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mirr method.
    */
    public function microsoftGraphMirr(): MirrRequestBuilder {
        return new MirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mod method.
    */
    public function microsoftGraphMod(): ModRequestBuilder {
        return new ModRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the month method.
    */
    public function microsoftGraphMonth(): MonthRequestBuilder {
        return new MonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mround method.
    */
    public function microsoftGraphMround(): MroundRequestBuilder {
        return new MroundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the multiNomial method.
    */
    public function microsoftGraphMultiNomial(): MultiNomialRequestBuilder {
        return new MultiNomialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the n method.
    */
    public function microsoftGraphN(): NRequestBuilder {
        return new NRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the na method.
    */
    public function microsoftGraphNa(): NaRequestBuilder {
        return new NaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the negBinom_Dist method.
    */
    public function microsoftGraphNegBinom_Dist(): NegBinom_DistRequestBuilder {
        return new NegBinom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays method.
    */
    public function microsoftGraphNetworkDays(): NetworkDaysRequestBuilder {
        return new NetworkDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays_Intl method.
    */
    public function microsoftGraphNetworkDays_Intl(): NetworkDays_IntlRequestBuilder {
        return new NetworkDays_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nominal method.
    */
    public function microsoftGraphNominal(): NominalRequestBuilder {
        return new NominalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Dist method.
    */
    public function microsoftGraphNorm_Dist(): Norm_DistRequestBuilder {
        return new Norm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Inv method.
    */
    public function microsoftGraphNorm_Inv(): Norm_InvRequestBuilder {
        return new Norm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Dist method.
    */
    public function microsoftGraphNorm_S_Dist(): Norm_S_DistRequestBuilder {
        return new Norm_S_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Inv method.
    */
    public function microsoftGraphNorm_S_Inv(): Norm_S_InvRequestBuilder {
        return new Norm_S_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the not method.
    */
    public function microsoftGraphNot(): NotRequestBuilder {
        return new NotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the now method.
    */
    public function microsoftGraphNow(): NowRequestBuilder {
        return new NowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nper method.
    */
    public function microsoftGraphNper(): NperRequestBuilder {
        return new NperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the npv method.
    */
    public function microsoftGraphNpv(): NpvRequestBuilder {
        return new NpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the numberValue method.
    */
    public function microsoftGraphNumberValue(): NumberValueRequestBuilder {
        return new NumberValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Bin method.
    */
    public function microsoftGraphOct2Bin(): Oct2BinRequestBuilder {
        return new Oct2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Dec method.
    */
    public function microsoftGraphOct2Dec(): Oct2DecRequestBuilder {
        return new Oct2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Hex method.
    */
    public function microsoftGraphOct2Hex(): Oct2HexRequestBuilder {
        return new Oct2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the odd method.
    */
    public function microsoftGraphOdd(): OddRequestBuilder {
        return new OddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFPrice method.
    */
    public function microsoftGraphOddFPrice(): OddFPriceRequestBuilder {
        return new OddFPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFYield method.
    */
    public function microsoftGraphOddFYield(): OddFYieldRequestBuilder {
        return new OddFYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLPrice method.
    */
    public function microsoftGraphOddLPrice(): OddLPriceRequestBuilder {
        return new OddLPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLYield method.
    */
    public function microsoftGraphOddLYield(): OddLYieldRequestBuilder {
        return new OddLYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the or method.
    */
    public function microsoftGraphOr(): OrRequestBuilder {
        return new OrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pduration method.
    */
    public function microsoftGraphPduration(): PdurationRequestBuilder {
        return new PdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Exc method.
    */
    public function microsoftGraphPercentile_Exc(): Percentile_ExcRequestBuilder {
        return new Percentile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Inc method.
    */
    public function microsoftGraphPercentile_Inc(): Percentile_IncRequestBuilder {
        return new Percentile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Exc method.
    */
    public function microsoftGraphPercentRank_Exc(): PercentRank_ExcRequestBuilder {
        return new PercentRank_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Inc method.
    */
    public function microsoftGraphPercentRank_Inc(): PercentRank_IncRequestBuilder {
        return new PercentRank_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permut method.
    */
    public function microsoftGraphPermut(): PermutRequestBuilder {
        return new PermutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permutationa method.
    */
    public function microsoftGraphPermutationa(): PermutationaRequestBuilder {
        return new PermutationaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the phi method.
    */
    public function microsoftGraphPhi(): PhiRequestBuilder {
        return new PhiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pi method.
    */
    public function microsoftGraphPi(): PiRequestBuilder {
        return new PiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pmt method.
    */
    public function microsoftGraphPmt(): PmtRequestBuilder {
        return new PmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the poisson_Dist method.
    */
    public function microsoftGraphPoisson_Dist(): Poisson_DistRequestBuilder {
        return new Poisson_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the power method.
    */
    public function microsoftGraphPower(): PowerRequestBuilder {
        return new PowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ppmt method.
    */
    public function microsoftGraphPpmt(): PpmtRequestBuilder {
        return new PpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the price method.
    */
    public function microsoftGraphPrice(): PriceRequestBuilder {
        return new PriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceDisc method.
    */
    public function microsoftGraphPriceDisc(): PriceDiscRequestBuilder {
        return new PriceDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceMat method.
    */
    public function microsoftGraphPriceMat(): PriceMatRequestBuilder {
        return new PriceMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the product method.
    */
    public function microsoftGraphProduct(): ProductRequestBuilder {
        return new ProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the proper method.
    */
    public function microsoftGraphProper(): ProperRequestBuilder {
        return new ProperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pv method.
    */
    public function microsoftGraphPv(): PvRequestBuilder {
        return new PvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Exc method.
    */
    public function microsoftGraphQuartile_Exc(): Quartile_ExcRequestBuilder {
        return new Quartile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Inc method.
    */
    public function microsoftGraphQuartile_Inc(): Quartile_IncRequestBuilder {
        return new Quartile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quotient method.
    */
    public function microsoftGraphQuotient(): QuotientRequestBuilder {
        return new QuotientRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the radians method.
    */
    public function microsoftGraphRadians(): RadiansRequestBuilder {
        return new RadiansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rand method.
    */
    public function microsoftGraphRand(): RandRequestBuilder {
        return new RandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the randBetween method.
    */
    public function microsoftGraphRandBetween(): RandBetweenRequestBuilder {
        return new RandBetweenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Avg method.
    */
    public function microsoftGraphRank_Avg(): Rank_AvgRequestBuilder {
        return new Rank_AvgRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Eq method.
    */
    public function microsoftGraphRank_Eq(): Rank_EqRequestBuilder {
        return new Rank_EqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rate method.
    */
    public function microsoftGraphRate(): RateRequestBuilder {
        return new RateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the received method.
    */
    public function microsoftGraphReceived(): ReceivedRequestBuilder {
        return new ReceivedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replace method.
    */
    public function microsoftGraphReplace(): ReplaceRequestBuilder {
        return new ReplaceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replaceB method.
    */
    public function microsoftGraphReplaceB(): ReplaceBRequestBuilder {
        return new ReplaceBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rept method.
    */
    public function microsoftGraphRept(): ReptRequestBuilder {
        return new ReptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the right method.
    */
    public function microsoftGraphRight(): RightRequestBuilder {
        return new RightRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rightb method.
    */
    public function microsoftGraphRightb(): RightbRequestBuilder {
        return new RightbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roman method.
    */
    public function microsoftGraphRoman(): RomanRequestBuilder {
        return new RomanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the round method.
    */
    public function microsoftGraphRound(): RoundRequestBuilder {
        return new RoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundDown method.
    */
    public function microsoftGraphRoundDown(): RoundDownRequestBuilder {
        return new RoundDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundUp method.
    */
    public function microsoftGraphRoundUp(): RoundUpRequestBuilder {
        return new RoundUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rows method.
    */
    public function microsoftGraphRows(): RowsRequestBuilder {
        return new RowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rri method.
    */
    public function microsoftGraphRri(): RriRequestBuilder {
        return new RriRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sec method.
    */
    public function microsoftGraphSec(): SecRequestBuilder {
        return new SecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sech method.
    */
    public function microsoftGraphSech(): SechRequestBuilder {
        return new SechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the second method.
    */
    public function microsoftGraphSecond(): SecondRequestBuilder {
        return new SecondRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the seriesSum method.
    */
    public function microsoftGraphSeriesSum(): SeriesSumRequestBuilder {
        return new SeriesSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheet method.
    */
    public function microsoftGraphSheet(): SheetRequestBuilder {
        return new SheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheets method.
    */
    public function microsoftGraphSheets(): SheetsRequestBuilder {
        return new SheetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sign method.
    */
    public function microsoftGraphSign(): SignRequestBuilder {
        return new SignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sin method.
    */
    public function microsoftGraphSin(): SinRequestBuilder {
        return new SinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sinh method.
    */
    public function microsoftGraphSinh(): SinhRequestBuilder {
        return new SinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew method.
    */
    public function microsoftGraphSkew(): SkewRequestBuilder {
        return new SkewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew_p method.
    */
    public function microsoftGraphSkew_p(): Skew_pRequestBuilder {
        return new Skew_pRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sln method.
    */
    public function microsoftGraphSln(): SlnRequestBuilder {
        return new SlnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the small method.
    */
    public function microsoftGraphSmall(): SmallRequestBuilder {
        return new SmallRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrt method.
    */
    public function microsoftGraphSqrt(): SqrtRequestBuilder {
        return new SqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrtPi method.
    */
    public function microsoftGraphSqrtPi(): SqrtPiRequestBuilder {
        return new SqrtPiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the standardize method.
    */
    public function microsoftGraphStandardize(): StandardizeRequestBuilder {
        return new StandardizeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_P method.
    */
    public function microsoftGraphStDev_P(): StDev_PRequestBuilder {
        return new StDev_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_S method.
    */
    public function microsoftGraphStDev_S(): StDev_SRequestBuilder {
        return new StDev_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevA method.
    */
    public function microsoftGraphStDevA(): StDevARequestBuilder {
        return new StDevARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevPA method.
    */
    public function microsoftGraphStDevPA(): StDevPARequestBuilder {
        return new StDevPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the substitute method.
    */
    public function microsoftGraphSubstitute(): SubstituteRequestBuilder {
        return new SubstituteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subtotal method.
    */
    public function microsoftGraphSubtotal(): SubtotalRequestBuilder {
        return new SubtotalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sum method.
    */
    public function microsoftGraphSum(): SumRequestBuilder {
        return new SumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIf method.
    */
    public function microsoftGraphSumIf(): SumIfRequestBuilder {
        return new SumIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIfs method.
    */
    public function microsoftGraphSumIfs(): SumIfsRequestBuilder {
        return new SumIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumSq method.
    */
    public function microsoftGraphSumSq(): SumSqRequestBuilder {
        return new SumSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syd method.
    */
    public function microsoftGraphSyd(): SydRequestBuilder {
        return new SydRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t method.
    */
    public function microsoftGraphT(): TRequestBuilder {
        return new TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist method.
    */
    public function microsoftGraphT_Dist(): T_DistRequestBuilder {
        return new T_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_2T method.
    */
    public function microsoftGraphT_Dist_2T(): T_Dist_2TRequestBuilder {
        return new T_Dist_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_RT method.
    */
    public function microsoftGraphT_Dist_RT(): T_Dist_RTRequestBuilder {
        return new T_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv method.
    */
    public function microsoftGraphT_Inv(): T_InvRequestBuilder {
        return new T_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv_2T method.
    */
    public function microsoftGraphT_Inv_2T(): T_Inv_2TRequestBuilder {
        return new T_Inv_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tan method.
    */
    public function microsoftGraphTan(): TanRequestBuilder {
        return new TanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tanh method.
    */
    public function microsoftGraphTanh(): TanhRequestBuilder {
        return new TanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillEq method.
    */
    public function microsoftGraphTbillEq(): TbillEqRequestBuilder {
        return new TbillEqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillPrice method.
    */
    public function microsoftGraphTbillPrice(): TbillPriceRequestBuilder {
        return new TbillPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillYield method.
    */
    public function microsoftGraphTbillYield(): TbillYieldRequestBuilder {
        return new TbillYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the text method.
    */
    public function microsoftGraphText(): TextRequestBuilder {
        return new TextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the time method.
    */
    public function microsoftGraphTime(): TimeRequestBuilder {
        return new TimeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the timevalue method.
    */
    public function microsoftGraphTimevalue(): TimevalueRequestBuilder {
        return new TimevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the today method.
    */
    public function microsoftGraphToday(): TodayRequestBuilder {
        return new TodayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trim method.
    */
    public function microsoftGraphTrim(): TrimRequestBuilder {
        return new TrimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trimMean method.
    */
    public function microsoftGraphTrimMean(): TrimMeanRequestBuilder {
        return new TrimMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the true method.
    */
    public function microsoftGraphTrue(): TrueRequestBuilder {
        return new TrueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trunc method.
    */
    public function microsoftGraphTrunc(): TruncRequestBuilder {
        return new TruncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the type method.
    */
    public function microsoftGraphType(): TypeRequestBuilder {
        return new TypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unichar method.
    */
    public function microsoftGraphUnichar(): UnicharRequestBuilder {
        return new UnicharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unicode method.
    */
    public function microsoftGraphUnicode(): UnicodeRequestBuilder {
        return new UnicodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the upper method.
    */
    public function microsoftGraphUpper(): UpperRequestBuilder {
        return new UpperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usdollar method.
    */
    public function microsoftGraphUsdollar(): UsdollarRequestBuilder {
        return new UsdollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the value method.
    */
    public function microsoftGraphValue(): ValueRequestBuilder {
        return new ValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_P method.
    */
    public function microsoftGraphVar_P(): Var_PRequestBuilder {
        return new Var_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_S method.
    */
    public function microsoftGraphVar_S(): Var_SRequestBuilder {
        return new Var_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varA method.
    */
    public function microsoftGraphVarA(): VarARequestBuilder {
        return new VarARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varPA method.
    */
    public function microsoftGraphVarPA(): VarPARequestBuilder {
        return new VarPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vdb method.
    */
    public function microsoftGraphVdb(): VdbRequestBuilder {
        return new VdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vlookup method.
    */
    public function microsoftGraphVlookup(): VlookupRequestBuilder {
        return new VlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekday method.
    */
    public function microsoftGraphWeekday(): WeekdayRequestBuilder {
        return new WeekdayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekNum method.
    */
    public function microsoftGraphWeekNum(): WeekNumRequestBuilder {
        return new WeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weibull_Dist method.
    */
    public function microsoftGraphWeibull_Dist(): Weibull_DistRequestBuilder {
        return new Weibull_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay method.
    */
    public function microsoftGraphWorkDay(): WorkDayRequestBuilder {
        return new WorkDayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay_Intl method.
    */
    public function microsoftGraphWorkDay_Intl(): WorkDay_IntlRequestBuilder {
        return new WorkDay_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xirr method.
    */
    public function microsoftGraphXirr(): XirrRequestBuilder {
        return new XirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xnpv method.
    */
    public function microsoftGraphXnpv(): XnpvRequestBuilder {
        return new XnpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xor method.
    */
    public function microsoftGraphXor(): XorRequestBuilder {
        return new XorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the year method.
    */
    public function microsoftGraphYear(): YearRequestBuilder {
        return new YearRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yearFrac method.
    */
    public function microsoftGraphYearFrac(): YearFracRequestBuilder {
        return new YearFracRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yield method.
    */
    public function microsoftGraphYield(): YieldRequestBuilder {
        return new YieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldDisc method.
    */
    public function microsoftGraphYieldDisc(): YieldDiscRequestBuilder {
        return new YieldDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldMat method.
    */
    public function microsoftGraphYieldMat(): YieldMatRequestBuilder {
        return new YieldMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the z_Test method.
    */
    public function microsoftGraphZ_Test(): Z_TestRequestBuilder {
        return new Z_TestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new FunctionsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/functions{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property functions for drives
     * @param FunctionsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?FunctionsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get functions from drives
     * @param FunctionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?FunctionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookFunctions::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property functions in drives
     * @param FunctionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(WorkbookFunctions $body, ?FunctionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookFunctions::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property functions for drives
     * @param FunctionsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FunctionsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get functions from drives
     * @param FunctionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FunctionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property functions in drives
     * @param FunctionsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookFunctions $body, ?FunctionsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
