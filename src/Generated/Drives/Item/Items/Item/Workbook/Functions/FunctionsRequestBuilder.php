<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAbs\MicrosoftGraphAbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAccrInt\MicrosoftGraphAccrIntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAccrIntM\MicrosoftGraphAccrIntMRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcos\MicrosoftGraphAcosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcosh\MicrosoftGraphAcoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcot\MicrosoftGraphAcotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAcoth\MicrosoftGraphAcothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAmorDegrc\MicrosoftGraphAmorDegrcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAmorLinc\MicrosoftGraphAmorLincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAnd\MicrosoftGraphAndRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphArabic\MicrosoftGraphArabicRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAreas\MicrosoftGraphAreasRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsc\MicrosoftGraphAscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsin\MicrosoftGraphAsinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAsinh\MicrosoftGraphAsinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtan\MicrosoftGraphAtanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtan2\MicrosoftGraphAtan2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAtanh\MicrosoftGraphAtanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAveDev\MicrosoftGraphAveDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverage\MicrosoftGraphAverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageA\MicrosoftGraphAverageARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageIf\MicrosoftGraphAverageIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphAverageIfs\MicrosoftGraphAverageIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBahtText\MicrosoftGraphBahtTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBase\MicrosoftGraphBaseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselI\MicrosoftGraphBesselIRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselJ\MicrosoftGraphBesselJRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselK\MicrosoftGraphBesselKRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBesselY\MicrosoftGraphBesselYRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBeta_Dist\MicrosoftGraphBeta_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBeta_Inv\MicrosoftGraphBeta_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Dec\MicrosoftGraphBin2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Hex\MicrosoftGraphBin2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBin2Oct\MicrosoftGraphBin2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Dist_Range\MicrosoftGraphBinom_Dist_RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Dist\MicrosoftGraphBinom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Inv\MicrosoftGraphBinom_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitand\MicrosoftGraphBitandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitlshift\MicrosoftGraphBitlshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitor\MicrosoftGraphBitorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitrshift\MicrosoftGraphBitrshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBitxor\MicrosoftGraphBitxorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCeiling_Math\MicrosoftGraphCeiling_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCeiling_Precise\MicrosoftGraphCeiling_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChar\MicrosoftGraphCharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Dist_RT\MicrosoftGraphChiSq_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Dist\MicrosoftGraphChiSq_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Inv_RT\MicrosoftGraphChiSq_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChiSq_Inv\MicrosoftGraphChiSq_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphChoose\MicrosoftGraphChooseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphClean\MicrosoftGraphCleanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCode\MicrosoftGraphCodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphColumns\MicrosoftGraphColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCombin\MicrosoftGraphCombinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCombina\MicrosoftGraphCombinaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphComplex\MicrosoftGraphComplexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConcatenate\MicrosoftGraphConcatenateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConfidence_Norm\MicrosoftGraphConfidence_NormRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConfidence_T\MicrosoftGraphConfidence_TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConvert\MicrosoftGraphConvertRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCos\MicrosoftGraphCosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCosh\MicrosoftGraphCoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCot\MicrosoftGraphCotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoth\MicrosoftGraphCothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCount\MicrosoftGraphCountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountA\MicrosoftGraphCountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountBlank\MicrosoftGraphCountBlankRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountIf\MicrosoftGraphCountIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCountIfs\MicrosoftGraphCountIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDayBs\MicrosoftGraphCoupDayBsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDays\MicrosoftGraphCoupDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupDaysNc\MicrosoftGraphCoupDaysNcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupNcd\MicrosoftGraphCoupNcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupNum\MicrosoftGraphCoupNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCoupPcd\MicrosoftGraphCoupPcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCsc\MicrosoftGraphCscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCsch\MicrosoftGraphCschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCumIPmt\MicrosoftGraphCumIPmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphCumPrinc\MicrosoftGraphCumPrincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDate\MicrosoftGraphDateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDatevalue\MicrosoftGraphDatevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDaverage\MicrosoftGraphDaverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDay\MicrosoftGraphDayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDays\MicrosoftGraphDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDays360\MicrosoftGraphDays360RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDb\MicrosoftGraphDbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDbcs\MicrosoftGraphDbcsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDcount\MicrosoftGraphDcountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDcountA\MicrosoftGraphDcountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDdb\MicrosoftGraphDdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Bin\MicrosoftGraphDec2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Hex\MicrosoftGraphDec2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDec2Oct\MicrosoftGraphDec2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDecimal\MicrosoftGraphDecimalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDegrees\MicrosoftGraphDegreesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDelta\MicrosoftGraphDeltaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDevSq\MicrosoftGraphDevSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDget\MicrosoftGraphDgetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDisc\MicrosoftGraphDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDmax\MicrosoftGraphDmaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDmin\MicrosoftGraphDminRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollar\MicrosoftGraphDollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollarDe\MicrosoftGraphDollarDeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDollarFr\MicrosoftGraphDollarFrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDproduct\MicrosoftGraphDproductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDstDev\MicrosoftGraphDstDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDstDevP\MicrosoftGraphDstDevPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDsum\MicrosoftGraphDsumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDuration\MicrosoftGraphDurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDvar\MicrosoftGraphDvarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDvarP\MicrosoftGraphDvarPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEcma_Ceiling\MicrosoftGraphEcma_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEdate\MicrosoftGraphEdateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEffect\MicrosoftGraphEffectRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEoMonth\MicrosoftGraphEoMonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErf_Precise\MicrosoftGraphErf_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErf\MicrosoftGraphErfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErfC_Precise\MicrosoftGraphErfC_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphErfC\MicrosoftGraphErfCRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphError_Type\MicrosoftGraphError_TypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphEven\MicrosoftGraphEvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExact\MicrosoftGraphExactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExp\MicrosoftGraphExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphExpon_Dist\MicrosoftGraphExpon_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Dist_RT\MicrosoftGraphF_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Dist\MicrosoftGraphF_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Inv_RT\MicrosoftGraphF_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Inv\MicrosoftGraphF_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFact\MicrosoftGraphFactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFactDouble\MicrosoftGraphFactDoubleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFalse\MicrosoftGraphFalseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFind\MicrosoftGraphFindRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFindB\MicrosoftGraphFindBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFisher\MicrosoftGraphFisherRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFisherInv\MicrosoftGraphFisherInvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFixed\MicrosoftGraphFixedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFloor_Math\MicrosoftGraphFloor_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFloor_Precise\MicrosoftGraphFloor_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFv\MicrosoftGraphFvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphFvschedule\MicrosoftGraphFvscheduleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma_Dist\MicrosoftGraphGamma_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma_Inv\MicrosoftGraphGamma_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma\MicrosoftGraphGammaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGammaLn_Precise\MicrosoftGraphGammaLn_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGammaLn\MicrosoftGraphGammaLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGauss\MicrosoftGraphGaussRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGcd\MicrosoftGraphGcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGeoMean\MicrosoftGraphGeoMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGeStep\MicrosoftGraphGeStepRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHarMean\MicrosoftGraphHarMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Bin\MicrosoftGraphHex2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Dec\MicrosoftGraphHex2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHex2Oct\MicrosoftGraphHex2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHlookup\MicrosoftGraphHlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHour\MicrosoftGraphHourRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHyperlink\MicrosoftGraphHyperlinkRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphHypGeom_Dist\MicrosoftGraphHypGeom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIf\MicrosoftGraphIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImAbs\MicrosoftGraphImAbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImaginary\MicrosoftGraphImaginaryRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImArgument\MicrosoftGraphImArgumentRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImConjugate\MicrosoftGraphImConjugateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCos\MicrosoftGraphImCosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCosh\MicrosoftGraphImCoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCot\MicrosoftGraphImCotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCsc\MicrosoftGraphImCscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImCsch\MicrosoftGraphImCschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImDiv\MicrosoftGraphImDivRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImExp\MicrosoftGraphImExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLn\MicrosoftGraphImLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLog10\MicrosoftGraphImLog10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImLog2\MicrosoftGraphImLog2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImPower\MicrosoftGraphImPowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImProduct\MicrosoftGraphImProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImReal\MicrosoftGraphImRealRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSec\MicrosoftGraphImSecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSech\MicrosoftGraphImSechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSin\MicrosoftGraphImSinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSinh\MicrosoftGraphImSinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSqrt\MicrosoftGraphImSqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSub\MicrosoftGraphImSubRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImSum\MicrosoftGraphImSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphImTan\MicrosoftGraphImTanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphInt\MicrosoftGraphIntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIntRate\MicrosoftGraphIntRateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIpmt\MicrosoftGraphIpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIrr\MicrosoftGraphIrrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsErr\MicrosoftGraphIsErrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsError\MicrosoftGraphIsErrorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsEven\MicrosoftGraphIsEvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsFormula\MicrosoftGraphIsFormulaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsLogical\MicrosoftGraphIsLogicalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNA\MicrosoftGraphIsNARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNonText\MicrosoftGraphIsNonTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsNumber\MicrosoftGraphIsNumberRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIso_Ceiling\MicrosoftGraphIso_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsOdd\MicrosoftGraphIsOddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsoWeekNum\MicrosoftGraphIsoWeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIspmt\MicrosoftGraphIspmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsref\MicrosoftGraphIsrefRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphIsText\MicrosoftGraphIsTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphKurt\MicrosoftGraphKurtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLarge\MicrosoftGraphLargeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLcm\MicrosoftGraphLcmRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLeft\MicrosoftGraphLeftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLeftb\MicrosoftGraphLeftbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLen\MicrosoftGraphLenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLenb\MicrosoftGraphLenbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLn\MicrosoftGraphLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLog\MicrosoftGraphLogRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLog10\MicrosoftGraphLog10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLogNorm_Dist\MicrosoftGraphLogNorm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLogNorm_Inv\MicrosoftGraphLogNorm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLookup\MicrosoftGraphLookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphLower\MicrosoftGraphLowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMatch\MicrosoftGraphMatchRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMax\MicrosoftGraphMaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMaxA\MicrosoftGraphMaxARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMduration\MicrosoftGraphMdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMedian\MicrosoftGraphMedianRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMid\MicrosoftGraphMidRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMidb\MicrosoftGraphMidbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMin\MicrosoftGraphMinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMinA\MicrosoftGraphMinARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMinute\MicrosoftGraphMinuteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMirr\MicrosoftGraphMirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMod\MicrosoftGraphModRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMonth\MicrosoftGraphMonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMround\MicrosoftGraphMroundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMultiNomial\MicrosoftGraphMultiNomialRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphN\MicrosoftGraphNRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNa\MicrosoftGraphNaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNegBinom_Dist\MicrosoftGraphNegBinom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNetworkDays_Intl\MicrosoftGraphNetworkDays_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNetworkDays\MicrosoftGraphNetworkDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNominal\MicrosoftGraphNominalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_Dist\MicrosoftGraphNorm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_Inv\MicrosoftGraphNorm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_S_Dist\MicrosoftGraphNorm_S_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNorm_S_Inv\MicrosoftGraphNorm_S_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNot\MicrosoftGraphNotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNow\MicrosoftGraphNowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNper\MicrosoftGraphNperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNpv\MicrosoftGraphNpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNumberValue\MicrosoftGraphNumberValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Bin\MicrosoftGraphOct2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Dec\MicrosoftGraphOct2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOct2Hex\MicrosoftGraphOct2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOdd\MicrosoftGraphOddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddFPrice\MicrosoftGraphOddFPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddFYield\MicrosoftGraphOddFYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddLPrice\MicrosoftGraphOddLPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOddLYield\MicrosoftGraphOddLYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphOr\MicrosoftGraphOrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPduration\MicrosoftGraphPdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentile_Exc\MicrosoftGraphPercentile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentile_Inc\MicrosoftGraphPercentile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentRank_Exc\MicrosoftGraphPercentRank_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPercentRank_Inc\MicrosoftGraphPercentRank_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPermut\MicrosoftGraphPermutRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPermutationa\MicrosoftGraphPermutationaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPhi\MicrosoftGraphPhiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPi\MicrosoftGraphPiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPmt\MicrosoftGraphPmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPoisson_Dist\MicrosoftGraphPoisson_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPower\MicrosoftGraphPowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPpmt\MicrosoftGraphPpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPrice\MicrosoftGraphPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPriceDisc\MicrosoftGraphPriceDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPriceMat\MicrosoftGraphPriceMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphProduct\MicrosoftGraphProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphProper\MicrosoftGraphProperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphPv\MicrosoftGraphPvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuartile_Exc\MicrosoftGraphQuartile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuartile_Inc\MicrosoftGraphQuartile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphQuotient\MicrosoftGraphQuotientRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRadians\MicrosoftGraphRadiansRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRand\MicrosoftGraphRandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRandBetween\MicrosoftGraphRandBetweenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRank_Avg\MicrosoftGraphRank_AvgRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRank_Eq\MicrosoftGraphRank_EqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRate\MicrosoftGraphRateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReceived\MicrosoftGraphReceivedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReplace\MicrosoftGraphReplaceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReplaceB\MicrosoftGraphReplaceBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRept\MicrosoftGraphReptRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRight\MicrosoftGraphRightRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRightb\MicrosoftGraphRightbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoman\MicrosoftGraphRomanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRound\MicrosoftGraphRoundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoundDown\MicrosoftGraphRoundDownRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRoundUp\MicrosoftGraphRoundUpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRows\MicrosoftGraphRowsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphRri\MicrosoftGraphRriRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSec\MicrosoftGraphSecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSech\MicrosoftGraphSechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSecond\MicrosoftGraphSecondRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSeriesSum\MicrosoftGraphSeriesSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSheet\MicrosoftGraphSheetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSheets\MicrosoftGraphSheetsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSign\MicrosoftGraphSignRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSin\MicrosoftGraphSinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSinh\MicrosoftGraphSinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSkew_p\MicrosoftGraphSkew_pRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSkew\MicrosoftGraphSkewRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSln\MicrosoftGraphSlnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSmall\MicrosoftGraphSmallRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSqrt\MicrosoftGraphSqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSqrtPi\MicrosoftGraphSqrtPiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStandardize\MicrosoftGraphStandardizeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDev_P\MicrosoftGraphStDev_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDev_S\MicrosoftGraphStDev_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDevA\MicrosoftGraphStDevARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphStDevPA\MicrosoftGraphStDevPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSubstitute\MicrosoftGraphSubstituteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSubtotal\MicrosoftGraphSubtotalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSum\MicrosoftGraphSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumIf\MicrosoftGraphSumIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumIfs\MicrosoftGraphSumIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumSq\MicrosoftGraphSumSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSyd\MicrosoftGraphSydRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist_2T\MicrosoftGraphT_Dist_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist_RT\MicrosoftGraphT_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Dist\MicrosoftGraphT_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Inv_2T\MicrosoftGraphT_Inv_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT_Inv\MicrosoftGraphT_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphT\MicrosoftGraphTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTan\MicrosoftGraphTanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTanh\MicrosoftGraphTanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillEq\MicrosoftGraphTbillEqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillPrice\MicrosoftGraphTbillPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTbillYield\MicrosoftGraphTbillYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphText\MicrosoftGraphTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTime\MicrosoftGraphTimeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTimevalue\MicrosoftGraphTimevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphToday\MicrosoftGraphTodayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrim\MicrosoftGraphTrimRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrimMean\MicrosoftGraphTrimMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrue\MicrosoftGraphTrueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphTrunc\MicrosoftGraphTruncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphType\MicrosoftGraphTypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUnichar\MicrosoftGraphUnicharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUnicode\MicrosoftGraphUnicodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUpper\MicrosoftGraphUpperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphUsdollar\MicrosoftGraphUsdollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphValue\MicrosoftGraphValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVar_P\MicrosoftGraphVar_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVar_S\MicrosoftGraphVar_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVarA\MicrosoftGraphVarARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVarPA\MicrosoftGraphVarPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVdb\MicrosoftGraphVdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVlookup\MicrosoftGraphVlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeekday\MicrosoftGraphWeekdayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeekNum\MicrosoftGraphWeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeibull_Dist\MicrosoftGraphWeibull_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWorkDay_Intl\MicrosoftGraphWorkDay_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWorkDay\MicrosoftGraphWorkDayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXirr\MicrosoftGraphXirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXnpv\MicrosoftGraphXnpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphXor\MicrosoftGraphXorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYear\MicrosoftGraphYearRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYearFrac\MicrosoftGraphYearFracRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYield\MicrosoftGraphYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYieldDisc\MicrosoftGraphYieldDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphYieldMat\MicrosoftGraphYieldMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphZ_Test\MicrosoftGraphZ_TestRequestBuilder;
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
    public function microsoftGraphAbs(): MicrosoftGraphAbsRequestBuilder {
        return new MicrosoftGraphAbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrInt method.
    */
    public function microsoftGraphAccrInt(): MicrosoftGraphAccrIntRequestBuilder {
        return new MicrosoftGraphAccrIntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrIntM method.
    */
    public function microsoftGraphAccrIntM(): MicrosoftGraphAccrIntMRequestBuilder {
        return new MicrosoftGraphAccrIntMRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acos method.
    */
    public function microsoftGraphAcos(): MicrosoftGraphAcosRequestBuilder {
        return new MicrosoftGraphAcosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acosh method.
    */
    public function microsoftGraphAcosh(): MicrosoftGraphAcoshRequestBuilder {
        return new MicrosoftGraphAcoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acot method.
    */
    public function microsoftGraphAcot(): MicrosoftGraphAcotRequestBuilder {
        return new MicrosoftGraphAcotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acoth method.
    */
    public function microsoftGraphAcoth(): MicrosoftGraphAcothRequestBuilder {
        return new MicrosoftGraphAcothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorDegrc method.
    */
    public function microsoftGraphAmorDegrc(): MicrosoftGraphAmorDegrcRequestBuilder {
        return new MicrosoftGraphAmorDegrcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorLinc method.
    */
    public function microsoftGraphAmorLinc(): MicrosoftGraphAmorLincRequestBuilder {
        return new MicrosoftGraphAmorLincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the and method.
    */
    public function microsoftGraphAnd(): MicrosoftGraphAndRequestBuilder {
        return new MicrosoftGraphAndRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the arabic method.
    */
    public function microsoftGraphArabic(): MicrosoftGraphArabicRequestBuilder {
        return new MicrosoftGraphArabicRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the areas method.
    */
    public function microsoftGraphAreas(): MicrosoftGraphAreasRequestBuilder {
        return new MicrosoftGraphAreasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asc method.
    */
    public function microsoftGraphAsc(): MicrosoftGraphAscRequestBuilder {
        return new MicrosoftGraphAscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asin method.
    */
    public function microsoftGraphAsin(): MicrosoftGraphAsinRequestBuilder {
        return new MicrosoftGraphAsinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asinh method.
    */
    public function microsoftGraphAsinh(): MicrosoftGraphAsinhRequestBuilder {
        return new MicrosoftGraphAsinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan method.
    */
    public function microsoftGraphAtan(): MicrosoftGraphAtanRequestBuilder {
        return new MicrosoftGraphAtanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan2 method.
    */
    public function microsoftGraphAtan2(): MicrosoftGraphAtan2RequestBuilder {
        return new MicrosoftGraphAtan2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atanh method.
    */
    public function microsoftGraphAtanh(): MicrosoftGraphAtanhRequestBuilder {
        return new MicrosoftGraphAtanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the aveDev method.
    */
    public function microsoftGraphAveDev(): MicrosoftGraphAveDevRequestBuilder {
        return new MicrosoftGraphAveDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the average method.
    */
    public function microsoftGraphAverage(): MicrosoftGraphAverageRequestBuilder {
        return new MicrosoftGraphAverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageA method.
    */
    public function microsoftGraphAverageA(): MicrosoftGraphAverageARequestBuilder {
        return new MicrosoftGraphAverageARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIf method.
    */
    public function microsoftGraphAverageIf(): MicrosoftGraphAverageIfRequestBuilder {
        return new MicrosoftGraphAverageIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIfs method.
    */
    public function microsoftGraphAverageIfs(): MicrosoftGraphAverageIfsRequestBuilder {
        return new MicrosoftGraphAverageIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bahtText method.
    */
    public function microsoftGraphBahtText(): MicrosoftGraphBahtTextRequestBuilder {
        return new MicrosoftGraphBahtTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the base method.
    */
    public function microsoftGraphBase(): MicrosoftGraphBaseRequestBuilder {
        return new MicrosoftGraphBaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselI method.
    */
    public function microsoftGraphBesselI(): MicrosoftGraphBesselIRequestBuilder {
        return new MicrosoftGraphBesselIRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselJ method.
    */
    public function microsoftGraphBesselJ(): MicrosoftGraphBesselJRequestBuilder {
        return new MicrosoftGraphBesselJRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselK method.
    */
    public function microsoftGraphBesselK(): MicrosoftGraphBesselKRequestBuilder {
        return new MicrosoftGraphBesselKRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselY method.
    */
    public function microsoftGraphBesselY(): MicrosoftGraphBesselYRequestBuilder {
        return new MicrosoftGraphBesselYRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Dist method.
    */
    public function microsoftGraphBeta_Dist(): MicrosoftGraphBeta_DistRequestBuilder {
        return new MicrosoftGraphBeta_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Inv method.
    */
    public function microsoftGraphBeta_Inv(): MicrosoftGraphBeta_InvRequestBuilder {
        return new MicrosoftGraphBeta_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Dec method.
    */
    public function microsoftGraphBin2Dec(): MicrosoftGraphBin2DecRequestBuilder {
        return new MicrosoftGraphBin2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Hex method.
    */
    public function microsoftGraphBin2Hex(): MicrosoftGraphBin2HexRequestBuilder {
        return new MicrosoftGraphBin2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Oct method.
    */
    public function microsoftGraphBin2Oct(): MicrosoftGraphBin2OctRequestBuilder {
        return new MicrosoftGraphBin2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist method.
    */
    public function microsoftGraphBinom_Dist(): MicrosoftGraphBinom_DistRequestBuilder {
        return new MicrosoftGraphBinom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist_Range method.
    */
    public function microsoftGraphBinom_Dist_Range(): MicrosoftGraphBinom_Dist_RangeRequestBuilder {
        return new MicrosoftGraphBinom_Dist_RangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Inv method.
    */
    public function microsoftGraphBinom_Inv(): MicrosoftGraphBinom_InvRequestBuilder {
        return new MicrosoftGraphBinom_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitand method.
    */
    public function microsoftGraphBitand(): MicrosoftGraphBitandRequestBuilder {
        return new MicrosoftGraphBitandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitlshift method.
    */
    public function microsoftGraphBitlshift(): MicrosoftGraphBitlshiftRequestBuilder {
        return new MicrosoftGraphBitlshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitor method.
    */
    public function microsoftGraphBitor(): MicrosoftGraphBitorRequestBuilder {
        return new MicrosoftGraphBitorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitrshift method.
    */
    public function microsoftGraphBitrshift(): MicrosoftGraphBitrshiftRequestBuilder {
        return new MicrosoftGraphBitrshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitxor method.
    */
    public function microsoftGraphBitxor(): MicrosoftGraphBitxorRequestBuilder {
        return new MicrosoftGraphBitxorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Math method.
    */
    public function microsoftGraphCeiling_Math(): MicrosoftGraphCeiling_MathRequestBuilder {
        return new MicrosoftGraphCeiling_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Precise method.
    */
    public function microsoftGraphCeiling_Precise(): MicrosoftGraphCeiling_PreciseRequestBuilder {
        return new MicrosoftGraphCeiling_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the char method.
    */
    public function microsoftGraphChar(): MicrosoftGraphCharRequestBuilder {
        return new MicrosoftGraphCharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist method.
    */
    public function microsoftGraphChiSq_Dist(): MicrosoftGraphChiSq_DistRequestBuilder {
        return new MicrosoftGraphChiSq_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist_RT method.
    */
    public function microsoftGraphChiSq_Dist_RT(): MicrosoftGraphChiSq_Dist_RTRequestBuilder {
        return new MicrosoftGraphChiSq_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv method.
    */
    public function microsoftGraphChiSq_Inv(): MicrosoftGraphChiSq_InvRequestBuilder {
        return new MicrosoftGraphChiSq_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv_RT method.
    */
    public function microsoftGraphChiSq_Inv_RT(): MicrosoftGraphChiSq_Inv_RTRequestBuilder {
        return new MicrosoftGraphChiSq_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the choose method.
    */
    public function microsoftGraphChoose(): MicrosoftGraphChooseRequestBuilder {
        return new MicrosoftGraphChooseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clean method.
    */
    public function microsoftGraphClean(): MicrosoftGraphCleanRequestBuilder {
        return new MicrosoftGraphCleanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the code method.
    */
    public function microsoftGraphCode(): MicrosoftGraphCodeRequestBuilder {
        return new MicrosoftGraphCodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the columns method.
    */
    public function microsoftGraphColumns(): MicrosoftGraphColumnsRequestBuilder {
        return new MicrosoftGraphColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combin method.
    */
    public function microsoftGraphCombin(): MicrosoftGraphCombinRequestBuilder {
        return new MicrosoftGraphCombinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combina method.
    */
    public function microsoftGraphCombina(): MicrosoftGraphCombinaRequestBuilder {
        return new MicrosoftGraphCombinaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the complex method.
    */
    public function microsoftGraphComplex(): MicrosoftGraphComplexRequestBuilder {
        return new MicrosoftGraphComplexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the concatenate method.
    */
    public function microsoftGraphConcatenate(): MicrosoftGraphConcatenateRequestBuilder {
        return new MicrosoftGraphConcatenateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_Norm method.
    */
    public function microsoftGraphConfidence_Norm(): MicrosoftGraphConfidence_NormRequestBuilder {
        return new MicrosoftGraphConfidence_NormRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_T method.
    */
    public function microsoftGraphConfidence_T(): MicrosoftGraphConfidence_TRequestBuilder {
        return new MicrosoftGraphConfidence_TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the convert method.
    */
    public function microsoftGraphConvert(): MicrosoftGraphConvertRequestBuilder {
        return new MicrosoftGraphConvertRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cos method.
    */
    public function microsoftGraphCos(): MicrosoftGraphCosRequestBuilder {
        return new MicrosoftGraphCosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cosh method.
    */
    public function microsoftGraphCosh(): MicrosoftGraphCoshRequestBuilder {
        return new MicrosoftGraphCoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cot method.
    */
    public function microsoftGraphCot(): MicrosoftGraphCotRequestBuilder {
        return new MicrosoftGraphCotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coth method.
    */
    public function microsoftGraphCoth(): MicrosoftGraphCothRequestBuilder {
        return new MicrosoftGraphCothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the count method.
    */
    public function microsoftGraphCount(): MicrosoftGraphCountRequestBuilder {
        return new MicrosoftGraphCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countA method.
    */
    public function microsoftGraphCountA(): MicrosoftGraphCountARequestBuilder {
        return new MicrosoftGraphCountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countBlank method.
    */
    public function microsoftGraphCountBlank(): MicrosoftGraphCountBlankRequestBuilder {
        return new MicrosoftGraphCountBlankRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIf method.
    */
    public function microsoftGraphCountIf(): MicrosoftGraphCountIfRequestBuilder {
        return new MicrosoftGraphCountIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIfs method.
    */
    public function microsoftGraphCountIfs(): MicrosoftGraphCountIfsRequestBuilder {
        return new MicrosoftGraphCountIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDayBs method.
    */
    public function microsoftGraphCoupDayBs(): MicrosoftGraphCoupDayBsRequestBuilder {
        return new MicrosoftGraphCoupDayBsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDays method.
    */
    public function microsoftGraphCoupDays(): MicrosoftGraphCoupDaysRequestBuilder {
        return new MicrosoftGraphCoupDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDaysNc method.
    */
    public function microsoftGraphCoupDaysNc(): MicrosoftGraphCoupDaysNcRequestBuilder {
        return new MicrosoftGraphCoupDaysNcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNcd method.
    */
    public function microsoftGraphCoupNcd(): MicrosoftGraphCoupNcdRequestBuilder {
        return new MicrosoftGraphCoupNcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNum method.
    */
    public function microsoftGraphCoupNum(): MicrosoftGraphCoupNumRequestBuilder {
        return new MicrosoftGraphCoupNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupPcd method.
    */
    public function microsoftGraphCoupPcd(): MicrosoftGraphCoupPcdRequestBuilder {
        return new MicrosoftGraphCoupPcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csc method.
    */
    public function microsoftGraphCsc(): MicrosoftGraphCscRequestBuilder {
        return new MicrosoftGraphCscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csch method.
    */
    public function microsoftGraphCsch(): MicrosoftGraphCschRequestBuilder {
        return new MicrosoftGraphCschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumIPmt method.
    */
    public function microsoftGraphCumIPmt(): MicrosoftGraphCumIPmtRequestBuilder {
        return new MicrosoftGraphCumIPmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumPrinc method.
    */
    public function microsoftGraphCumPrinc(): MicrosoftGraphCumPrincRequestBuilder {
        return new MicrosoftGraphCumPrincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the date method.
    */
    public function microsoftGraphDate(): MicrosoftGraphDateRequestBuilder {
        return new MicrosoftGraphDateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the datevalue method.
    */
    public function microsoftGraphDatevalue(): MicrosoftGraphDatevalueRequestBuilder {
        return new MicrosoftGraphDatevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the daverage method.
    */
    public function microsoftGraphDaverage(): MicrosoftGraphDaverageRequestBuilder {
        return new MicrosoftGraphDaverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the day method.
    */
    public function microsoftGraphDay(): MicrosoftGraphDayRequestBuilder {
        return new MicrosoftGraphDayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days method.
    */
    public function microsoftGraphDays(): MicrosoftGraphDaysRequestBuilder {
        return new MicrosoftGraphDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days360 method.
    */
    public function microsoftGraphDays360(): MicrosoftGraphDays360RequestBuilder {
        return new MicrosoftGraphDays360RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the db method.
    */
    public function microsoftGraphDb(): MicrosoftGraphDbRequestBuilder {
        return new MicrosoftGraphDbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dbcs method.
    */
    public function microsoftGraphDbcs(): MicrosoftGraphDbcsRequestBuilder {
        return new MicrosoftGraphDbcsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcount method.
    */
    public function microsoftGraphDcount(): MicrosoftGraphDcountRequestBuilder {
        return new MicrosoftGraphDcountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcountA method.
    */
    public function microsoftGraphDcountA(): MicrosoftGraphDcountARequestBuilder {
        return new MicrosoftGraphDcountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ddb method.
    */
    public function microsoftGraphDdb(): MicrosoftGraphDdbRequestBuilder {
        return new MicrosoftGraphDdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Bin method.
    */
    public function microsoftGraphDec2Bin(): MicrosoftGraphDec2BinRequestBuilder {
        return new MicrosoftGraphDec2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Hex method.
    */
    public function microsoftGraphDec2Hex(): MicrosoftGraphDec2HexRequestBuilder {
        return new MicrosoftGraphDec2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Oct method.
    */
    public function microsoftGraphDec2Oct(): MicrosoftGraphDec2OctRequestBuilder {
        return new MicrosoftGraphDec2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decimal method.
    */
    public function microsoftGraphDecimal(): MicrosoftGraphDecimalRequestBuilder {
        return new MicrosoftGraphDecimalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the degrees method.
    */
    public function microsoftGraphDegrees(): MicrosoftGraphDegreesRequestBuilder {
        return new MicrosoftGraphDegreesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function microsoftGraphDelta(): MicrosoftGraphDeltaRequestBuilder {
        return new MicrosoftGraphDeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the devSq method.
    */
    public function microsoftGraphDevSq(): MicrosoftGraphDevSqRequestBuilder {
        return new MicrosoftGraphDevSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dget method.
    */
    public function microsoftGraphDget(): MicrosoftGraphDgetRequestBuilder {
        return new MicrosoftGraphDgetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disc method.
    */
    public function microsoftGraphDisc(): MicrosoftGraphDiscRequestBuilder {
        return new MicrosoftGraphDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmax method.
    */
    public function microsoftGraphDmax(): MicrosoftGraphDmaxRequestBuilder {
        return new MicrosoftGraphDmaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmin method.
    */
    public function microsoftGraphDmin(): MicrosoftGraphDminRequestBuilder {
        return new MicrosoftGraphDminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollar method.
    */
    public function microsoftGraphDollar(): MicrosoftGraphDollarRequestBuilder {
        return new MicrosoftGraphDollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarDe method.
    */
    public function microsoftGraphDollarDe(): MicrosoftGraphDollarDeRequestBuilder {
        return new MicrosoftGraphDollarDeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarFr method.
    */
    public function microsoftGraphDollarFr(): MicrosoftGraphDollarFrRequestBuilder {
        return new MicrosoftGraphDollarFrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dproduct method.
    */
    public function microsoftGraphDproduct(): MicrosoftGraphDproductRequestBuilder {
        return new MicrosoftGraphDproductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDev method.
    */
    public function microsoftGraphDstDev(): MicrosoftGraphDstDevRequestBuilder {
        return new MicrosoftGraphDstDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDevP method.
    */
    public function microsoftGraphDstDevP(): MicrosoftGraphDstDevPRequestBuilder {
        return new MicrosoftGraphDstDevPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dsum method.
    */
    public function microsoftGraphDsum(): MicrosoftGraphDsumRequestBuilder {
        return new MicrosoftGraphDsumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the duration method.
    */
    public function microsoftGraphDuration(): MicrosoftGraphDurationRequestBuilder {
        return new MicrosoftGraphDurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvar method.
    */
    public function microsoftGraphDvar(): MicrosoftGraphDvarRequestBuilder {
        return new MicrosoftGraphDvarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvarP method.
    */
    public function microsoftGraphDvarP(): MicrosoftGraphDvarPRequestBuilder {
        return new MicrosoftGraphDvarPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ecma_Ceiling method.
    */
    public function microsoftGraphEcma_Ceiling(): MicrosoftGraphEcma_CeilingRequestBuilder {
        return new MicrosoftGraphEcma_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the edate method.
    */
    public function microsoftGraphEdate(): MicrosoftGraphEdateRequestBuilder {
        return new MicrosoftGraphEdateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the effect method.
    */
    public function microsoftGraphEffect(): MicrosoftGraphEffectRequestBuilder {
        return new MicrosoftGraphEffectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the eoMonth method.
    */
    public function microsoftGraphEoMonth(): MicrosoftGraphEoMonthRequestBuilder {
        return new MicrosoftGraphEoMonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf method.
    */
    public function microsoftGraphErf(): MicrosoftGraphErfRequestBuilder {
        return new MicrosoftGraphErfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf_Precise method.
    */
    public function microsoftGraphErf_Precise(): MicrosoftGraphErf_PreciseRequestBuilder {
        return new MicrosoftGraphErf_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC method.
    */
    public function microsoftGraphErfC(): MicrosoftGraphErfCRequestBuilder {
        return new MicrosoftGraphErfCRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC_Precise method.
    */
    public function microsoftGraphErfC_Precise(): MicrosoftGraphErfC_PreciseRequestBuilder {
        return new MicrosoftGraphErfC_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the error_Type method.
    */
    public function microsoftGraphError_Type(): MicrosoftGraphError_TypeRequestBuilder {
        return new MicrosoftGraphError_TypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the even method.
    */
    public function microsoftGraphEven(): MicrosoftGraphEvenRequestBuilder {
        return new MicrosoftGraphEvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exact method.
    */
    public function microsoftGraphExact(): MicrosoftGraphExactRequestBuilder {
        return new MicrosoftGraphExactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exp method.
    */
    public function microsoftGraphExp(): MicrosoftGraphExpRequestBuilder {
        return new MicrosoftGraphExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the expon_Dist method.
    */
    public function microsoftGraphExpon_Dist(): MicrosoftGraphExpon_DistRequestBuilder {
        return new MicrosoftGraphExpon_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist method.
    */
    public function microsoftGraphF_Dist(): MicrosoftGraphF_DistRequestBuilder {
        return new MicrosoftGraphF_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist_RT method.
    */
    public function microsoftGraphF_Dist_RT(): MicrosoftGraphF_Dist_RTRequestBuilder {
        return new MicrosoftGraphF_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv method.
    */
    public function microsoftGraphF_Inv(): MicrosoftGraphF_InvRequestBuilder {
        return new MicrosoftGraphF_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv_RT method.
    */
    public function microsoftGraphF_Inv_RT(): MicrosoftGraphF_Inv_RTRequestBuilder {
        return new MicrosoftGraphF_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fact method.
    */
    public function microsoftGraphFact(): MicrosoftGraphFactRequestBuilder {
        return new MicrosoftGraphFactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the factDouble method.
    */
    public function microsoftGraphFactDouble(): MicrosoftGraphFactDoubleRequestBuilder {
        return new MicrosoftGraphFactDoubleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the false method.
    */
    public function microsoftGraphFalse(): MicrosoftGraphFalseRequestBuilder {
        return new MicrosoftGraphFalseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the find method.
    */
    public function microsoftGraphFind(): MicrosoftGraphFindRequestBuilder {
        return new MicrosoftGraphFindRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findB method.
    */
    public function microsoftGraphFindB(): MicrosoftGraphFindBRequestBuilder {
        return new MicrosoftGraphFindBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisher method.
    */
    public function microsoftGraphFisher(): MicrosoftGraphFisherRequestBuilder {
        return new MicrosoftGraphFisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisherInv method.
    */
    public function microsoftGraphFisherInv(): MicrosoftGraphFisherInvRequestBuilder {
        return new MicrosoftGraphFisherInvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fixed method.
    */
    public function microsoftGraphFixed(): MicrosoftGraphFixedRequestBuilder {
        return new MicrosoftGraphFixedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Math method.
    */
    public function microsoftGraphFloor_Math(): MicrosoftGraphFloor_MathRequestBuilder {
        return new MicrosoftGraphFloor_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Precise method.
    */
    public function microsoftGraphFloor_Precise(): MicrosoftGraphFloor_PreciseRequestBuilder {
        return new MicrosoftGraphFloor_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fv method.
    */
    public function microsoftGraphFv(): MicrosoftGraphFvRequestBuilder {
        return new MicrosoftGraphFvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fvschedule method.
    */
    public function microsoftGraphFvschedule(): MicrosoftGraphFvscheduleRequestBuilder {
        return new MicrosoftGraphFvscheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma method.
    */
    public function microsoftGraphGamma(): MicrosoftGraphGammaRequestBuilder {
        return new MicrosoftGraphGammaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Dist method.
    */
    public function microsoftGraphGamma_Dist(): MicrosoftGraphGamma_DistRequestBuilder {
        return new MicrosoftGraphGamma_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Inv method.
    */
    public function microsoftGraphGamma_Inv(): MicrosoftGraphGamma_InvRequestBuilder {
        return new MicrosoftGraphGamma_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn method.
    */
    public function microsoftGraphGammaLn(): MicrosoftGraphGammaLnRequestBuilder {
        return new MicrosoftGraphGammaLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn_Precise method.
    */
    public function microsoftGraphGammaLn_Precise(): MicrosoftGraphGammaLn_PreciseRequestBuilder {
        return new MicrosoftGraphGammaLn_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gauss method.
    */
    public function microsoftGraphGauss(): MicrosoftGraphGaussRequestBuilder {
        return new MicrosoftGraphGaussRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gcd method.
    */
    public function microsoftGraphGcd(): MicrosoftGraphGcdRequestBuilder {
        return new MicrosoftGraphGcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geoMean method.
    */
    public function microsoftGraphGeoMean(): MicrosoftGraphGeoMeanRequestBuilder {
        return new MicrosoftGraphGeoMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geStep method.
    */
    public function microsoftGraphGeStep(): MicrosoftGraphGeStepRequestBuilder {
        return new MicrosoftGraphGeStepRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the harMean method.
    */
    public function microsoftGraphHarMean(): MicrosoftGraphHarMeanRequestBuilder {
        return new MicrosoftGraphHarMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Bin method.
    */
    public function microsoftGraphHex2Bin(): MicrosoftGraphHex2BinRequestBuilder {
        return new MicrosoftGraphHex2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Dec method.
    */
    public function microsoftGraphHex2Dec(): MicrosoftGraphHex2DecRequestBuilder {
        return new MicrosoftGraphHex2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Oct method.
    */
    public function microsoftGraphHex2Oct(): MicrosoftGraphHex2OctRequestBuilder {
        return new MicrosoftGraphHex2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hlookup method.
    */
    public function microsoftGraphHlookup(): MicrosoftGraphHlookupRequestBuilder {
        return new MicrosoftGraphHlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hour method.
    */
    public function microsoftGraphHour(): MicrosoftGraphHourRequestBuilder {
        return new MicrosoftGraphHourRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hyperlink method.
    */
    public function microsoftGraphHyperlink(): MicrosoftGraphHyperlinkRequestBuilder {
        return new MicrosoftGraphHyperlinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hypGeom_Dist method.
    */
    public function microsoftGraphHypGeom_Dist(): MicrosoftGraphHypGeom_DistRequestBuilder {
        return new MicrosoftGraphHypGeom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the if method.
    */
    public function microsoftGraphIf(): MicrosoftGraphIfRequestBuilder {
        return new MicrosoftGraphIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imAbs method.
    */
    public function microsoftGraphImAbs(): MicrosoftGraphImAbsRequestBuilder {
        return new MicrosoftGraphImAbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imaginary method.
    */
    public function microsoftGraphImaginary(): MicrosoftGraphImaginaryRequestBuilder {
        return new MicrosoftGraphImaginaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imArgument method.
    */
    public function microsoftGraphImArgument(): MicrosoftGraphImArgumentRequestBuilder {
        return new MicrosoftGraphImArgumentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imConjugate method.
    */
    public function microsoftGraphImConjugate(): MicrosoftGraphImConjugateRequestBuilder {
        return new MicrosoftGraphImConjugateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCos method.
    */
    public function microsoftGraphImCos(): MicrosoftGraphImCosRequestBuilder {
        return new MicrosoftGraphImCosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCosh method.
    */
    public function microsoftGraphImCosh(): MicrosoftGraphImCoshRequestBuilder {
        return new MicrosoftGraphImCoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCot method.
    */
    public function microsoftGraphImCot(): MicrosoftGraphImCotRequestBuilder {
        return new MicrosoftGraphImCotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsc method.
    */
    public function microsoftGraphImCsc(): MicrosoftGraphImCscRequestBuilder {
        return new MicrosoftGraphImCscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsch method.
    */
    public function microsoftGraphImCsch(): MicrosoftGraphImCschRequestBuilder {
        return new MicrosoftGraphImCschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imDiv method.
    */
    public function microsoftGraphImDiv(): MicrosoftGraphImDivRequestBuilder {
        return new MicrosoftGraphImDivRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imExp method.
    */
    public function microsoftGraphImExp(): MicrosoftGraphImExpRequestBuilder {
        return new MicrosoftGraphImExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLn method.
    */
    public function microsoftGraphImLn(): MicrosoftGraphImLnRequestBuilder {
        return new MicrosoftGraphImLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog10 method.
    */
    public function microsoftGraphImLog10(): MicrosoftGraphImLog10RequestBuilder {
        return new MicrosoftGraphImLog10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog2 method.
    */
    public function microsoftGraphImLog2(): MicrosoftGraphImLog2RequestBuilder {
        return new MicrosoftGraphImLog2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imPower method.
    */
    public function microsoftGraphImPower(): MicrosoftGraphImPowerRequestBuilder {
        return new MicrosoftGraphImPowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imProduct method.
    */
    public function microsoftGraphImProduct(): MicrosoftGraphImProductRequestBuilder {
        return new MicrosoftGraphImProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imReal method.
    */
    public function microsoftGraphImReal(): MicrosoftGraphImRealRequestBuilder {
        return new MicrosoftGraphImRealRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSec method.
    */
    public function microsoftGraphImSec(): MicrosoftGraphImSecRequestBuilder {
        return new MicrosoftGraphImSecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSech method.
    */
    public function microsoftGraphImSech(): MicrosoftGraphImSechRequestBuilder {
        return new MicrosoftGraphImSechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSin method.
    */
    public function microsoftGraphImSin(): MicrosoftGraphImSinRequestBuilder {
        return new MicrosoftGraphImSinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSinh method.
    */
    public function microsoftGraphImSinh(): MicrosoftGraphImSinhRequestBuilder {
        return new MicrosoftGraphImSinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSqrt method.
    */
    public function microsoftGraphImSqrt(): MicrosoftGraphImSqrtRequestBuilder {
        return new MicrosoftGraphImSqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSub method.
    */
    public function microsoftGraphImSub(): MicrosoftGraphImSubRequestBuilder {
        return new MicrosoftGraphImSubRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSum method.
    */
    public function microsoftGraphImSum(): MicrosoftGraphImSumRequestBuilder {
        return new MicrosoftGraphImSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imTan method.
    */
    public function microsoftGraphImTan(): MicrosoftGraphImTanRequestBuilder {
        return new MicrosoftGraphImTanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the int method.
    */
    public function microsoftGraphInt(): MicrosoftGraphIntRequestBuilder {
        return new MicrosoftGraphIntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the intRate method.
    */
    public function microsoftGraphIntRate(): MicrosoftGraphIntRateRequestBuilder {
        return new MicrosoftGraphIntRateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ipmt method.
    */
    public function microsoftGraphIpmt(): MicrosoftGraphIpmtRequestBuilder {
        return new MicrosoftGraphIpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the irr method.
    */
    public function microsoftGraphIrr(): MicrosoftGraphIrrRequestBuilder {
        return new MicrosoftGraphIrrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isErr method.
    */
    public function microsoftGraphIsErr(): MicrosoftGraphIsErrRequestBuilder {
        return new MicrosoftGraphIsErrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isError method.
    */
    public function microsoftGraphIsError(): MicrosoftGraphIsErrorRequestBuilder {
        return new MicrosoftGraphIsErrorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isEven method.
    */
    public function microsoftGraphIsEven(): MicrosoftGraphIsEvenRequestBuilder {
        return new MicrosoftGraphIsEvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isFormula method.
    */
    public function microsoftGraphIsFormula(): MicrosoftGraphIsFormulaRequestBuilder {
        return new MicrosoftGraphIsFormulaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isLogical method.
    */
    public function microsoftGraphIsLogical(): MicrosoftGraphIsLogicalRequestBuilder {
        return new MicrosoftGraphIsLogicalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNA method.
    */
    public function microsoftGraphIsNA(): MicrosoftGraphIsNARequestBuilder {
        return new MicrosoftGraphIsNARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNonText method.
    */
    public function microsoftGraphIsNonText(): MicrosoftGraphIsNonTextRequestBuilder {
        return new MicrosoftGraphIsNonTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNumber method.
    */
    public function microsoftGraphIsNumber(): MicrosoftGraphIsNumberRequestBuilder {
        return new MicrosoftGraphIsNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the iso_Ceiling method.
    */
    public function microsoftGraphIso_Ceiling(): MicrosoftGraphIso_CeilingRequestBuilder {
        return new MicrosoftGraphIso_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isOdd method.
    */
    public function microsoftGraphIsOdd(): MicrosoftGraphIsOddRequestBuilder {
        return new MicrosoftGraphIsOddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isoWeekNum method.
    */
    public function microsoftGraphIsoWeekNum(): MicrosoftGraphIsoWeekNumRequestBuilder {
        return new MicrosoftGraphIsoWeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ispmt method.
    */
    public function microsoftGraphIspmt(): MicrosoftGraphIspmtRequestBuilder {
        return new MicrosoftGraphIspmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isref method.
    */
    public function microsoftGraphIsref(): MicrosoftGraphIsrefRequestBuilder {
        return new MicrosoftGraphIsrefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isText method.
    */
    public function microsoftGraphIsText(): MicrosoftGraphIsTextRequestBuilder {
        return new MicrosoftGraphIsTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the kurt method.
    */
    public function microsoftGraphKurt(): MicrosoftGraphKurtRequestBuilder {
        return new MicrosoftGraphKurtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the large method.
    */
    public function microsoftGraphLarge(): MicrosoftGraphLargeRequestBuilder {
        return new MicrosoftGraphLargeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lcm method.
    */
    public function microsoftGraphLcm(): MicrosoftGraphLcmRequestBuilder {
        return new MicrosoftGraphLcmRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the left method.
    */
    public function microsoftGraphLeft(): MicrosoftGraphLeftRequestBuilder {
        return new MicrosoftGraphLeftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the leftb method.
    */
    public function microsoftGraphLeftb(): MicrosoftGraphLeftbRequestBuilder {
        return new MicrosoftGraphLeftbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the len method.
    */
    public function microsoftGraphLen(): MicrosoftGraphLenRequestBuilder {
        return new MicrosoftGraphLenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lenb method.
    */
    public function microsoftGraphLenb(): MicrosoftGraphLenbRequestBuilder {
        return new MicrosoftGraphLenbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ln method.
    */
    public function microsoftGraphLn(): MicrosoftGraphLnRequestBuilder {
        return new MicrosoftGraphLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log method.
    */
    public function microsoftGraphLog(): MicrosoftGraphLogRequestBuilder {
        return new MicrosoftGraphLogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log10 method.
    */
    public function microsoftGraphLog10(): MicrosoftGraphLog10RequestBuilder {
        return new MicrosoftGraphLog10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Dist method.
    */
    public function microsoftGraphLogNorm_Dist(): MicrosoftGraphLogNorm_DistRequestBuilder {
        return new MicrosoftGraphLogNorm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Inv method.
    */
    public function microsoftGraphLogNorm_Inv(): MicrosoftGraphLogNorm_InvRequestBuilder {
        return new MicrosoftGraphLogNorm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lookup method.
    */
    public function microsoftGraphLookup(): MicrosoftGraphLookupRequestBuilder {
        return new MicrosoftGraphLookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lower method.
    */
    public function microsoftGraphLower(): MicrosoftGraphLowerRequestBuilder {
        return new MicrosoftGraphLowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the match method.
    */
    public function microsoftGraphMatch(): MicrosoftGraphMatchRequestBuilder {
        return new MicrosoftGraphMatchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the max method.
    */
    public function microsoftGraphMax(): MicrosoftGraphMaxRequestBuilder {
        return new MicrosoftGraphMaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the maxA method.
    */
    public function microsoftGraphMaxA(): MicrosoftGraphMaxARequestBuilder {
        return new MicrosoftGraphMaxARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mduration method.
    */
    public function microsoftGraphMduration(): MicrosoftGraphMdurationRequestBuilder {
        return new MicrosoftGraphMdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the median method.
    */
    public function microsoftGraphMedian(): MicrosoftGraphMedianRequestBuilder {
        return new MicrosoftGraphMedianRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mid method.
    */
    public function microsoftGraphMid(): MicrosoftGraphMidRequestBuilder {
        return new MicrosoftGraphMidRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the midb method.
    */
    public function microsoftGraphMidb(): MicrosoftGraphMidbRequestBuilder {
        return new MicrosoftGraphMidbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the min method.
    */
    public function microsoftGraphMin(): MicrosoftGraphMinRequestBuilder {
        return new MicrosoftGraphMinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minA method.
    */
    public function microsoftGraphMinA(): MicrosoftGraphMinARequestBuilder {
        return new MicrosoftGraphMinARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minute method.
    */
    public function microsoftGraphMinute(): MicrosoftGraphMinuteRequestBuilder {
        return new MicrosoftGraphMinuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mirr method.
    */
    public function microsoftGraphMirr(): MicrosoftGraphMirrRequestBuilder {
        return new MicrosoftGraphMirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mod method.
    */
    public function microsoftGraphMod(): MicrosoftGraphModRequestBuilder {
        return new MicrosoftGraphModRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the month method.
    */
    public function microsoftGraphMonth(): MicrosoftGraphMonthRequestBuilder {
        return new MicrosoftGraphMonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mround method.
    */
    public function microsoftGraphMround(): MicrosoftGraphMroundRequestBuilder {
        return new MicrosoftGraphMroundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the multiNomial method.
    */
    public function microsoftGraphMultiNomial(): MicrosoftGraphMultiNomialRequestBuilder {
        return new MicrosoftGraphMultiNomialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the n method.
    */
    public function microsoftGraphN(): MicrosoftGraphNRequestBuilder {
        return new MicrosoftGraphNRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the na method.
    */
    public function microsoftGraphNa(): MicrosoftGraphNaRequestBuilder {
        return new MicrosoftGraphNaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the negBinom_Dist method.
    */
    public function microsoftGraphNegBinom_Dist(): MicrosoftGraphNegBinom_DistRequestBuilder {
        return new MicrosoftGraphNegBinom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays method.
    */
    public function microsoftGraphNetworkDays(): MicrosoftGraphNetworkDaysRequestBuilder {
        return new MicrosoftGraphNetworkDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays_Intl method.
    */
    public function microsoftGraphNetworkDays_Intl(): MicrosoftGraphNetworkDays_IntlRequestBuilder {
        return new MicrosoftGraphNetworkDays_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nominal method.
    */
    public function microsoftGraphNominal(): MicrosoftGraphNominalRequestBuilder {
        return new MicrosoftGraphNominalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Dist method.
    */
    public function microsoftGraphNorm_Dist(): MicrosoftGraphNorm_DistRequestBuilder {
        return new MicrosoftGraphNorm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Inv method.
    */
    public function microsoftGraphNorm_Inv(): MicrosoftGraphNorm_InvRequestBuilder {
        return new MicrosoftGraphNorm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Dist method.
    */
    public function microsoftGraphNorm_S_Dist(): MicrosoftGraphNorm_S_DistRequestBuilder {
        return new MicrosoftGraphNorm_S_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Inv method.
    */
    public function microsoftGraphNorm_S_Inv(): MicrosoftGraphNorm_S_InvRequestBuilder {
        return new MicrosoftGraphNorm_S_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the not method.
    */
    public function microsoftGraphNot(): MicrosoftGraphNotRequestBuilder {
        return new MicrosoftGraphNotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the now method.
    */
    public function microsoftGraphNow(): MicrosoftGraphNowRequestBuilder {
        return new MicrosoftGraphNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nper method.
    */
    public function microsoftGraphNper(): MicrosoftGraphNperRequestBuilder {
        return new MicrosoftGraphNperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the npv method.
    */
    public function microsoftGraphNpv(): MicrosoftGraphNpvRequestBuilder {
        return new MicrosoftGraphNpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the numberValue method.
    */
    public function microsoftGraphNumberValue(): MicrosoftGraphNumberValueRequestBuilder {
        return new MicrosoftGraphNumberValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Bin method.
    */
    public function microsoftGraphOct2Bin(): MicrosoftGraphOct2BinRequestBuilder {
        return new MicrosoftGraphOct2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Dec method.
    */
    public function microsoftGraphOct2Dec(): MicrosoftGraphOct2DecRequestBuilder {
        return new MicrosoftGraphOct2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Hex method.
    */
    public function microsoftGraphOct2Hex(): MicrosoftGraphOct2HexRequestBuilder {
        return new MicrosoftGraphOct2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the odd method.
    */
    public function microsoftGraphOdd(): MicrosoftGraphOddRequestBuilder {
        return new MicrosoftGraphOddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFPrice method.
    */
    public function microsoftGraphOddFPrice(): MicrosoftGraphOddFPriceRequestBuilder {
        return new MicrosoftGraphOddFPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFYield method.
    */
    public function microsoftGraphOddFYield(): MicrosoftGraphOddFYieldRequestBuilder {
        return new MicrosoftGraphOddFYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLPrice method.
    */
    public function microsoftGraphOddLPrice(): MicrosoftGraphOddLPriceRequestBuilder {
        return new MicrosoftGraphOddLPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLYield method.
    */
    public function microsoftGraphOddLYield(): MicrosoftGraphOddLYieldRequestBuilder {
        return new MicrosoftGraphOddLYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the or method.
    */
    public function microsoftGraphOr(): MicrosoftGraphOrRequestBuilder {
        return new MicrosoftGraphOrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pduration method.
    */
    public function microsoftGraphPduration(): MicrosoftGraphPdurationRequestBuilder {
        return new MicrosoftGraphPdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Exc method.
    */
    public function microsoftGraphPercentile_Exc(): MicrosoftGraphPercentile_ExcRequestBuilder {
        return new MicrosoftGraphPercentile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Inc method.
    */
    public function microsoftGraphPercentile_Inc(): MicrosoftGraphPercentile_IncRequestBuilder {
        return new MicrosoftGraphPercentile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Exc method.
    */
    public function microsoftGraphPercentRank_Exc(): MicrosoftGraphPercentRank_ExcRequestBuilder {
        return new MicrosoftGraphPercentRank_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Inc method.
    */
    public function microsoftGraphPercentRank_Inc(): MicrosoftGraphPercentRank_IncRequestBuilder {
        return new MicrosoftGraphPercentRank_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permut method.
    */
    public function microsoftGraphPermut(): MicrosoftGraphPermutRequestBuilder {
        return new MicrosoftGraphPermutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permutationa method.
    */
    public function microsoftGraphPermutationa(): MicrosoftGraphPermutationaRequestBuilder {
        return new MicrosoftGraphPermutationaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the phi method.
    */
    public function microsoftGraphPhi(): MicrosoftGraphPhiRequestBuilder {
        return new MicrosoftGraphPhiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pi method.
    */
    public function microsoftGraphPi(): MicrosoftGraphPiRequestBuilder {
        return new MicrosoftGraphPiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pmt method.
    */
    public function microsoftGraphPmt(): MicrosoftGraphPmtRequestBuilder {
        return new MicrosoftGraphPmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the poisson_Dist method.
    */
    public function microsoftGraphPoisson_Dist(): MicrosoftGraphPoisson_DistRequestBuilder {
        return new MicrosoftGraphPoisson_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the power method.
    */
    public function microsoftGraphPower(): MicrosoftGraphPowerRequestBuilder {
        return new MicrosoftGraphPowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ppmt method.
    */
    public function microsoftGraphPpmt(): MicrosoftGraphPpmtRequestBuilder {
        return new MicrosoftGraphPpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the price method.
    */
    public function microsoftGraphPrice(): MicrosoftGraphPriceRequestBuilder {
        return new MicrosoftGraphPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceDisc method.
    */
    public function microsoftGraphPriceDisc(): MicrosoftGraphPriceDiscRequestBuilder {
        return new MicrosoftGraphPriceDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceMat method.
    */
    public function microsoftGraphPriceMat(): MicrosoftGraphPriceMatRequestBuilder {
        return new MicrosoftGraphPriceMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the product method.
    */
    public function microsoftGraphProduct(): MicrosoftGraphProductRequestBuilder {
        return new MicrosoftGraphProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the proper method.
    */
    public function microsoftGraphProper(): MicrosoftGraphProperRequestBuilder {
        return new MicrosoftGraphProperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pv method.
    */
    public function microsoftGraphPv(): MicrosoftGraphPvRequestBuilder {
        return new MicrosoftGraphPvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Exc method.
    */
    public function microsoftGraphQuartile_Exc(): MicrosoftGraphQuartile_ExcRequestBuilder {
        return new MicrosoftGraphQuartile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Inc method.
    */
    public function microsoftGraphQuartile_Inc(): MicrosoftGraphQuartile_IncRequestBuilder {
        return new MicrosoftGraphQuartile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quotient method.
    */
    public function microsoftGraphQuotient(): MicrosoftGraphQuotientRequestBuilder {
        return new MicrosoftGraphQuotientRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the radians method.
    */
    public function microsoftGraphRadians(): MicrosoftGraphRadiansRequestBuilder {
        return new MicrosoftGraphRadiansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rand method.
    */
    public function microsoftGraphRand(): MicrosoftGraphRandRequestBuilder {
        return new MicrosoftGraphRandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the randBetween method.
    */
    public function microsoftGraphRandBetween(): MicrosoftGraphRandBetweenRequestBuilder {
        return new MicrosoftGraphRandBetweenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Avg method.
    */
    public function microsoftGraphRank_Avg(): MicrosoftGraphRank_AvgRequestBuilder {
        return new MicrosoftGraphRank_AvgRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Eq method.
    */
    public function microsoftGraphRank_Eq(): MicrosoftGraphRank_EqRequestBuilder {
        return new MicrosoftGraphRank_EqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rate method.
    */
    public function microsoftGraphRate(): MicrosoftGraphRateRequestBuilder {
        return new MicrosoftGraphRateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the received method.
    */
    public function microsoftGraphReceived(): MicrosoftGraphReceivedRequestBuilder {
        return new MicrosoftGraphReceivedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replace method.
    */
    public function microsoftGraphReplace(): MicrosoftGraphReplaceRequestBuilder {
        return new MicrosoftGraphReplaceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replaceB method.
    */
    public function microsoftGraphReplaceB(): MicrosoftGraphReplaceBRequestBuilder {
        return new MicrosoftGraphReplaceBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rept method.
    */
    public function microsoftGraphRept(): MicrosoftGraphReptRequestBuilder {
        return new MicrosoftGraphReptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the right method.
    */
    public function microsoftGraphRight(): MicrosoftGraphRightRequestBuilder {
        return new MicrosoftGraphRightRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rightb method.
    */
    public function microsoftGraphRightb(): MicrosoftGraphRightbRequestBuilder {
        return new MicrosoftGraphRightbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roman method.
    */
    public function microsoftGraphRoman(): MicrosoftGraphRomanRequestBuilder {
        return new MicrosoftGraphRomanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the round method.
    */
    public function microsoftGraphRound(): MicrosoftGraphRoundRequestBuilder {
        return new MicrosoftGraphRoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundDown method.
    */
    public function microsoftGraphRoundDown(): MicrosoftGraphRoundDownRequestBuilder {
        return new MicrosoftGraphRoundDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundUp method.
    */
    public function microsoftGraphRoundUp(): MicrosoftGraphRoundUpRequestBuilder {
        return new MicrosoftGraphRoundUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rows method.
    */
    public function microsoftGraphRows(): MicrosoftGraphRowsRequestBuilder {
        return new MicrosoftGraphRowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rri method.
    */
    public function microsoftGraphRri(): MicrosoftGraphRriRequestBuilder {
        return new MicrosoftGraphRriRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sec method.
    */
    public function microsoftGraphSec(): MicrosoftGraphSecRequestBuilder {
        return new MicrosoftGraphSecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sech method.
    */
    public function microsoftGraphSech(): MicrosoftGraphSechRequestBuilder {
        return new MicrosoftGraphSechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the second method.
    */
    public function microsoftGraphSecond(): MicrosoftGraphSecondRequestBuilder {
        return new MicrosoftGraphSecondRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the seriesSum method.
    */
    public function microsoftGraphSeriesSum(): MicrosoftGraphSeriesSumRequestBuilder {
        return new MicrosoftGraphSeriesSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheet method.
    */
    public function microsoftGraphSheet(): MicrosoftGraphSheetRequestBuilder {
        return new MicrosoftGraphSheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheets method.
    */
    public function microsoftGraphSheets(): MicrosoftGraphSheetsRequestBuilder {
        return new MicrosoftGraphSheetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sign method.
    */
    public function microsoftGraphSign(): MicrosoftGraphSignRequestBuilder {
        return new MicrosoftGraphSignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sin method.
    */
    public function microsoftGraphSin(): MicrosoftGraphSinRequestBuilder {
        return new MicrosoftGraphSinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sinh method.
    */
    public function microsoftGraphSinh(): MicrosoftGraphSinhRequestBuilder {
        return new MicrosoftGraphSinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew method.
    */
    public function microsoftGraphSkew(): MicrosoftGraphSkewRequestBuilder {
        return new MicrosoftGraphSkewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew_p method.
    */
    public function microsoftGraphSkew_p(): MicrosoftGraphSkew_pRequestBuilder {
        return new MicrosoftGraphSkew_pRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sln method.
    */
    public function microsoftGraphSln(): MicrosoftGraphSlnRequestBuilder {
        return new MicrosoftGraphSlnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the small method.
    */
    public function microsoftGraphSmall(): MicrosoftGraphSmallRequestBuilder {
        return new MicrosoftGraphSmallRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrt method.
    */
    public function microsoftGraphSqrt(): MicrosoftGraphSqrtRequestBuilder {
        return new MicrosoftGraphSqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrtPi method.
    */
    public function microsoftGraphSqrtPi(): MicrosoftGraphSqrtPiRequestBuilder {
        return new MicrosoftGraphSqrtPiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the standardize method.
    */
    public function microsoftGraphStandardize(): MicrosoftGraphStandardizeRequestBuilder {
        return new MicrosoftGraphStandardizeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_P method.
    */
    public function microsoftGraphStDev_P(): MicrosoftGraphStDev_PRequestBuilder {
        return new MicrosoftGraphStDev_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_S method.
    */
    public function microsoftGraphStDev_S(): MicrosoftGraphStDev_SRequestBuilder {
        return new MicrosoftGraphStDev_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevA method.
    */
    public function microsoftGraphStDevA(): MicrosoftGraphStDevARequestBuilder {
        return new MicrosoftGraphStDevARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevPA method.
    */
    public function microsoftGraphStDevPA(): MicrosoftGraphStDevPARequestBuilder {
        return new MicrosoftGraphStDevPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the substitute method.
    */
    public function microsoftGraphSubstitute(): MicrosoftGraphSubstituteRequestBuilder {
        return new MicrosoftGraphSubstituteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subtotal method.
    */
    public function microsoftGraphSubtotal(): MicrosoftGraphSubtotalRequestBuilder {
        return new MicrosoftGraphSubtotalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sum method.
    */
    public function microsoftGraphSum(): MicrosoftGraphSumRequestBuilder {
        return new MicrosoftGraphSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIf method.
    */
    public function microsoftGraphSumIf(): MicrosoftGraphSumIfRequestBuilder {
        return new MicrosoftGraphSumIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIfs method.
    */
    public function microsoftGraphSumIfs(): MicrosoftGraphSumIfsRequestBuilder {
        return new MicrosoftGraphSumIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumSq method.
    */
    public function microsoftGraphSumSq(): MicrosoftGraphSumSqRequestBuilder {
        return new MicrosoftGraphSumSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syd method.
    */
    public function microsoftGraphSyd(): MicrosoftGraphSydRequestBuilder {
        return new MicrosoftGraphSydRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t method.
    */
    public function microsoftGraphT(): MicrosoftGraphTRequestBuilder {
        return new MicrosoftGraphTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist method.
    */
    public function microsoftGraphT_Dist(): MicrosoftGraphT_DistRequestBuilder {
        return new MicrosoftGraphT_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_2T method.
    */
    public function microsoftGraphT_Dist_2T(): MicrosoftGraphT_Dist_2TRequestBuilder {
        return new MicrosoftGraphT_Dist_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_RT method.
    */
    public function microsoftGraphT_Dist_RT(): MicrosoftGraphT_Dist_RTRequestBuilder {
        return new MicrosoftGraphT_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv method.
    */
    public function microsoftGraphT_Inv(): MicrosoftGraphT_InvRequestBuilder {
        return new MicrosoftGraphT_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv_2T method.
    */
    public function microsoftGraphT_Inv_2T(): MicrosoftGraphT_Inv_2TRequestBuilder {
        return new MicrosoftGraphT_Inv_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tan method.
    */
    public function microsoftGraphTan(): MicrosoftGraphTanRequestBuilder {
        return new MicrosoftGraphTanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tanh method.
    */
    public function microsoftGraphTanh(): MicrosoftGraphTanhRequestBuilder {
        return new MicrosoftGraphTanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillEq method.
    */
    public function microsoftGraphTbillEq(): MicrosoftGraphTbillEqRequestBuilder {
        return new MicrosoftGraphTbillEqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillPrice method.
    */
    public function microsoftGraphTbillPrice(): MicrosoftGraphTbillPriceRequestBuilder {
        return new MicrosoftGraphTbillPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillYield method.
    */
    public function microsoftGraphTbillYield(): MicrosoftGraphTbillYieldRequestBuilder {
        return new MicrosoftGraphTbillYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the text method.
    */
    public function microsoftGraphText(): MicrosoftGraphTextRequestBuilder {
        return new MicrosoftGraphTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the time method.
    */
    public function microsoftGraphTime(): MicrosoftGraphTimeRequestBuilder {
        return new MicrosoftGraphTimeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the timevalue method.
    */
    public function microsoftGraphTimevalue(): MicrosoftGraphTimevalueRequestBuilder {
        return new MicrosoftGraphTimevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the today method.
    */
    public function microsoftGraphToday(): MicrosoftGraphTodayRequestBuilder {
        return new MicrosoftGraphTodayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trim method.
    */
    public function microsoftGraphTrim(): MicrosoftGraphTrimRequestBuilder {
        return new MicrosoftGraphTrimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trimMean method.
    */
    public function microsoftGraphTrimMean(): MicrosoftGraphTrimMeanRequestBuilder {
        return new MicrosoftGraphTrimMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the true method.
    */
    public function microsoftGraphTrue(): MicrosoftGraphTrueRequestBuilder {
        return new MicrosoftGraphTrueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trunc method.
    */
    public function microsoftGraphTrunc(): MicrosoftGraphTruncRequestBuilder {
        return new MicrosoftGraphTruncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the type method.
    */
    public function microsoftGraphType(): MicrosoftGraphTypeRequestBuilder {
        return new MicrosoftGraphTypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unichar method.
    */
    public function microsoftGraphUnichar(): MicrosoftGraphUnicharRequestBuilder {
        return new MicrosoftGraphUnicharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unicode method.
    */
    public function microsoftGraphUnicode(): MicrosoftGraphUnicodeRequestBuilder {
        return new MicrosoftGraphUnicodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the upper method.
    */
    public function microsoftGraphUpper(): MicrosoftGraphUpperRequestBuilder {
        return new MicrosoftGraphUpperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usdollar method.
    */
    public function microsoftGraphUsdollar(): MicrosoftGraphUsdollarRequestBuilder {
        return new MicrosoftGraphUsdollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the value method.
    */
    public function microsoftGraphValue(): MicrosoftGraphValueRequestBuilder {
        return new MicrosoftGraphValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_P method.
    */
    public function microsoftGraphVar_P(): MicrosoftGraphVar_PRequestBuilder {
        return new MicrosoftGraphVar_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_S method.
    */
    public function microsoftGraphVar_S(): MicrosoftGraphVar_SRequestBuilder {
        return new MicrosoftGraphVar_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varA method.
    */
    public function microsoftGraphVarA(): MicrosoftGraphVarARequestBuilder {
        return new MicrosoftGraphVarARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varPA method.
    */
    public function microsoftGraphVarPA(): MicrosoftGraphVarPARequestBuilder {
        return new MicrosoftGraphVarPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vdb method.
    */
    public function microsoftGraphVdb(): MicrosoftGraphVdbRequestBuilder {
        return new MicrosoftGraphVdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vlookup method.
    */
    public function microsoftGraphVlookup(): MicrosoftGraphVlookupRequestBuilder {
        return new MicrosoftGraphVlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekday method.
    */
    public function microsoftGraphWeekday(): MicrosoftGraphWeekdayRequestBuilder {
        return new MicrosoftGraphWeekdayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekNum method.
    */
    public function microsoftGraphWeekNum(): MicrosoftGraphWeekNumRequestBuilder {
        return new MicrosoftGraphWeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weibull_Dist method.
    */
    public function microsoftGraphWeibull_Dist(): MicrosoftGraphWeibull_DistRequestBuilder {
        return new MicrosoftGraphWeibull_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay method.
    */
    public function microsoftGraphWorkDay(): MicrosoftGraphWorkDayRequestBuilder {
        return new MicrosoftGraphWorkDayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay_Intl method.
    */
    public function microsoftGraphWorkDay_Intl(): MicrosoftGraphWorkDay_IntlRequestBuilder {
        return new MicrosoftGraphWorkDay_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xirr method.
    */
    public function microsoftGraphXirr(): MicrosoftGraphXirrRequestBuilder {
        return new MicrosoftGraphXirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xnpv method.
    */
    public function microsoftGraphXnpv(): MicrosoftGraphXnpvRequestBuilder {
        return new MicrosoftGraphXnpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xor method.
    */
    public function microsoftGraphXor(): MicrosoftGraphXorRequestBuilder {
        return new MicrosoftGraphXorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the year method.
    */
    public function microsoftGraphYear(): MicrosoftGraphYearRequestBuilder {
        return new MicrosoftGraphYearRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yearFrac method.
    */
    public function microsoftGraphYearFrac(): MicrosoftGraphYearFracRequestBuilder {
        return new MicrosoftGraphYearFracRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yield method.
    */
    public function microsoftGraphYield(): MicrosoftGraphYieldRequestBuilder {
        return new MicrosoftGraphYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldDisc method.
    */
    public function microsoftGraphYieldDisc(): MicrosoftGraphYieldDiscRequestBuilder {
        return new MicrosoftGraphYieldDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldMat method.
    */
    public function microsoftGraphYieldMat(): MicrosoftGraphYieldMatRequestBuilder {
        return new MicrosoftGraphYieldMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the z_Test method.
    */
    public function microsoftGraphZ_Test(): MicrosoftGraphZ_TestRequestBuilder {
        return new MicrosoftGraphZ_TestRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/functions{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
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
     * @param WorkbookFunctions $body The request body
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
     * @param WorkbookFunctions $body The request body
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
