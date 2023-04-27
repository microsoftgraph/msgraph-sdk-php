<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Abs\AbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AccrInt\AccrIntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AccrIntM\AccrIntMRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Acos\AcosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Acosh\AcoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Acot\AcotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Acoth\AcothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AmorDegrc\AmorDegrcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AmorLinc\AmorLincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Arabic\ArabicRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Areas\AreasRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Asc\AscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Asin\AsinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Asinh\AsinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Atan\AtanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Atan2\Atan2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Atanh\AtanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AveDev\AveDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Average\AverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AverageA\AverageARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AverageIf\AverageIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AverageIfs\AverageIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\BahtText\BahtTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Base\EscapedBaseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\BesselI\BesselIRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\BesselJ\BesselJRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\BesselK\BesselKRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\BesselY\BesselYRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Beta_Dist\Beta_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Beta_Inv\Beta_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bin2Dec\Bin2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bin2Hex\Bin2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bin2Oct\Bin2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Binom_Dist_Range\Binom_Dist_RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Binom_Dist\Binom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Binom_Inv\Binom_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bitand\BitandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bitlshift\BitlshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bitor\BitorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bitrshift\BitrshiftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Bitxor\BitxorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ceiling_Math\Ceiling_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ceiling_Precise\Ceiling_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Char\CharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ChiSq_Dist_RT\ChiSq_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ChiSq_Dist\ChiSq_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ChiSq_Inv_RT\ChiSq_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ChiSq_Inv\ChiSq_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Choose\ChooseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Clean\CleanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Code\CodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Combin\CombinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Combina\CombinaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Complex\ComplexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Concatenate\ConcatenateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Confidence_Norm\Confidence_NormRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Confidence_T\Confidence_TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Convert\ConvertRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Cos\CosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Cosh\CoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Cot\CotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Coth\CothRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CountA\CountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CountBlank\CountBlankRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CountIf\CountIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CountIfs\CountIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupDayBs\CoupDayBsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupDays\CoupDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupDaysNc\CoupDaysNcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupNcd\CoupNcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupNum\CoupNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupPcd\CoupPcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Csc\CscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Csch\CschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CumIPmt\CumIPmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CumPrinc\CumPrincRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Date\DateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Datevalue\DatevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Daverage\DaverageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Day\DayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Days\DaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Days360\Days360RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Db\DbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dbcs\DbcsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dcount\DcountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DcountA\DcountARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ddb\DdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dec2Bin\Dec2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dec2Hex\Dec2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dec2Oct\Dec2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Decimal\DecimalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Degrees\DegreesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DevSq\DevSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dget\DgetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Disc\DiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dmax\DmaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dmin\DminRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dollar\DollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DollarDe\DollarDeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DollarFr\DollarFrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dproduct\DproductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DstDev\DstDevRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DstDevP\DstDevPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dsum\DsumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Duration\DurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Dvar\DvarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\DvarP\DvarPRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ecma_Ceiling\Ecma_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Edate\EdateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Effect\EffectRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EoMonth\EoMonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Erf_Precise\Erf_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Erf\ErfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ErfC_Precise\ErfC_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ErfC\ErfCRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Error_Type\Error_TypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedAnd\AndRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedIf\IfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedOr\OrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedXor\XorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedYield\YieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Even\EvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Exact\ExactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Exp\ExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Expon_Dist\Expon_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\F_Dist_RT\F_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\F_Dist\F_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\F_Inv_RT\F_Inv_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\F_Inv\F_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Fact\FactRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FactDouble\FactDoubleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\False\FalseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Find\FindRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FindB\FindBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Fisher\FisherRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FisherInv\FisherInvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Fixed\FixedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Floor_Math\Floor_MathRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Floor_Precise\Floor_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Fv\FvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Fvschedule\FvscheduleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Gamma_Dist\Gamma_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Gamma_Inv\Gamma_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Gamma\GammaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\GammaLn_Precise\GammaLn_PreciseRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\GammaLn\GammaLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Gauss\GaussRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Gcd\GcdRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\GeoMean\GeoMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\GeStep\GeStepRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\HarMean\HarMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hex2Bin\Hex2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hex2Dec\Hex2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hex2Oct\Hex2OctRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hlookup\HlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hour\HourRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Hyperlink\HyperlinkRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\HypGeom_Dist\HypGeom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImAbs\ImAbsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Imaginary\ImaginaryRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImArgument\ImArgumentRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImConjugate\ImConjugateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImCos\ImCosRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImCosh\ImCoshRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImCot\ImCotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImCsc\ImCscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImCsch\ImCschRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImDiv\ImDivRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImExp\ImExpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImLn\ImLnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImLog10\ImLog10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImLog2\ImLog2RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImPower\ImPowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImProduct\ImProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImReal\ImRealRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSec\ImSecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSech\ImSechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSin\ImSinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSinh\ImSinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSqrt\ImSqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSub\ImSubRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSum\ImSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImTan\ImTanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Int\IntRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IntRate\IntRateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ipmt\IpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Irr\IrrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsErr\IsErrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsError\IsErrorRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsEven\IsEvenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsFormula\IsFormulaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsLogical\IsLogicalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsNA\IsNARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsNonText\IsNonTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsNumber\IsNumberRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Iso_Ceiling\Iso_CeilingRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsOdd\IsOddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsoWeekNum\IsoWeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ispmt\IspmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Isref\IsrefRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\IsText\IsTextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Kurt\KurtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Large\LargeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Lcm\LcmRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Left\LeftRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Leftb\LeftbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Len\LenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Lenb\LenbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ln\LnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Log\LogRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Log10\Log10RequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\LogNorm_Dist\LogNorm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\LogNorm_Inv\LogNorm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Lookup\LookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Lower\LowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Match\MatchRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Max\MaxRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MaxA\MaxARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Mduration\MdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Median\MedianRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Mid\MidRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Midb\MidbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Min\MinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MinA\MinARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Minute\MinuteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Mirr\MirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Mod\ModRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Month\MonthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Mround\MroundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MultiNomial\MultiNomialRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\N\NRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Na\NaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\NegBinom_Dist\NegBinom_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\NetworkDays_Intl\NetworkDays_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\NetworkDays\NetworkDaysRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Nominal\NominalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Norm_Dist\Norm_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Norm_Inv\Norm_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Norm_S_Dist\Norm_S_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Norm_S_Inv\Norm_S_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Not\NotRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Now\NowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Nper\NperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Npv\NpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\NumberValue\NumberValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Oct2Bin\Oct2BinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Oct2Dec\Oct2DecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Oct2Hex\Oct2HexRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Odd\OddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\OddFPrice\OddFPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\OddFYield\OddFYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\OddLPrice\OddLPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\OddLYield\OddLYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Pduration\PdurationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Percentile_Exc\Percentile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Percentile_Inc\Percentile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\PercentRank_Exc\PercentRank_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\PercentRank_Inc\PercentRank_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Permut\PermutRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Permutationa\PermutationaRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Phi\PhiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Pi\PiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Pmt\PmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Poisson_Dist\Poisson_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Power\PowerRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Ppmt\PpmtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Price\PriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\PriceDisc\PriceDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\PriceMat\PriceMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Product\ProductRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Proper\ProperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Pv\PvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Quartile_Exc\Quartile_ExcRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Quartile_Inc\Quartile_IncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Quotient\QuotientRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Radians\RadiansRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rand\RandRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\RandBetween\RandBetweenRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rank_Avg\Rank_AvgRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rank_Eq\Rank_EqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rate\RateRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Received\ReceivedRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Replace\ReplaceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ReplaceB\ReplaceBRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rept\ReptRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Right\RightRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rightb\RightbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Roman\RomanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Round\RoundRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\RoundDown\RoundDownRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\RoundUp\RoundUpRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rows\RowsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Rri\RriRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sec\SecRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sech\SechRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Second\SecondRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\SeriesSum\SeriesSumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sheet\SheetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sheets\SheetsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sign\SignRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sin\SinRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sinh\SinhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Skew_p\Skew_pRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Skew\SkewRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sln\SlnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Small\SmallRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sqrt\SqrtRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\SqrtPi\SqrtPiRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Standardize\StandardizeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\StDev_P\StDev_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\StDev_S\StDev_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\StDevA\StDevARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\StDevPA\StDevPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Substitute\SubstituteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Subtotal\SubtotalRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Sum\SumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\SumIf\SumIfRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\SumIfs\SumIfsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\SumSq\SumSqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Syd\SydRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T_Dist_2T\T_Dist_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T_Dist_RT\T_Dist_RTRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T_Dist\T_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T_Inv_2T\T_Inv_2TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T_Inv\T_InvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\T\TRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Tan\TanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Tanh\TanhRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\TbillEq\TbillEqRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\TbillPrice\TbillPriceRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\TbillYield\TbillYieldRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Text\TextRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Time\TimeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Timevalue\TimevalueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Today\TodayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Trim\TrimRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\TrimMean\TrimMeanRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\True\TrueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Trunc\TruncRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Type\TypeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Unichar\UnicharRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Unicode\UnicodeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Upper\UpperRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Usdollar\UsdollarRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Value\ValueRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Var_P\Var_PRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Var_S\Var_SRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\VarA\VarARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\VarPA\VarPARequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Vdb\VdbRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Vlookup\VlookupRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Weekday\WeekdayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\WeekNum\WeekNumRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Weibull_Dist\Weibull_DistRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\WorkDay_Intl\WorkDay_IntlRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\WorkDay\WorkDayRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Xirr\XirrRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Xnpv\XnpvRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Year\YearRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\YearFrac\YearFracRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\YieldDisc\YieldDiscRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\YieldMat\YieldMatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Z_Test\Z_TestRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookFunctions;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the functions property of the microsoft.graph.workbook entity.
*/
class FunctionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the abs method.
    */
    public function abs(): AbsRequestBuilder {
        return new AbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrInt method.
    */
    public function accrInt(): AccrIntRequestBuilder {
        return new AccrIntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the accrIntM method.
    */
    public function accrIntM(): AccrIntMRequestBuilder {
        return new AccrIntMRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acos method.
    */
    public function acos(): AcosRequestBuilder {
        return new AcosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acosh method.
    */
    public function acosh(): AcoshRequestBuilder {
        return new AcoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acot method.
    */
    public function acot(): AcotRequestBuilder {
        return new AcotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the acoth method.
    */
    public function acoth(): AcothRequestBuilder {
        return new AcothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorDegrc method.
    */
    public function amorDegrc(): AmorDegrcRequestBuilder {
        return new AmorDegrcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the amorLinc method.
    */
    public function amorLinc(): AmorLincRequestBuilder {
        return new AmorLincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the arabic method.
    */
    public function arabic(): ArabicRequestBuilder {
        return new ArabicRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the areas method.
    */
    public function areas(): AreasRequestBuilder {
        return new AreasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asc method.
    */
    public function asc(): AscRequestBuilder {
        return new AscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asin method.
    */
    public function asin(): AsinRequestBuilder {
        return new AsinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the asinh method.
    */
    public function asinh(): AsinhRequestBuilder {
        return new AsinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan method.
    */
    public function atan(): AtanRequestBuilder {
        return new AtanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atan2 method.
    */
    public function atan2(): Atan2RequestBuilder {
        return new Atan2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the atanh method.
    */
    public function atanh(): AtanhRequestBuilder {
        return new AtanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the aveDev method.
    */
    public function aveDev(): AveDevRequestBuilder {
        return new AveDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the average method.
    */
    public function average(): AverageRequestBuilder {
        return new AverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageA method.
    */
    public function averageA(): AverageARequestBuilder {
        return new AverageARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIf method.
    */
    public function averageIf(): AverageIfRequestBuilder {
        return new AverageIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the averageIfs method.
    */
    public function averageIfs(): AverageIfsRequestBuilder {
        return new AverageIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bahtText method.
    */
    public function bahtText(): BahtTextRequestBuilder {
        return new BahtTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the base method.
    */
    public function base(): EscapedBaseRequestBuilder {
        return new EscapedBaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselI method.
    */
    public function besselI(): BesselIRequestBuilder {
        return new BesselIRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselJ method.
    */
    public function besselJ(): BesselJRequestBuilder {
        return new BesselJRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselK method.
    */
    public function besselK(): BesselKRequestBuilder {
        return new BesselKRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the besselY method.
    */
    public function besselY(): BesselYRequestBuilder {
        return new BesselYRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Dist method.
    */
    public function beta_Dist(): Beta_DistRequestBuilder {
        return new Beta_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the beta_Inv method.
    */
    public function beta_Inv(): Beta_InvRequestBuilder {
        return new Beta_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Dec method.
    */
    public function bin2Dec(): Bin2DecRequestBuilder {
        return new Bin2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Hex method.
    */
    public function bin2Hex(): Bin2HexRequestBuilder {
        return new Bin2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bin2Oct method.
    */
    public function bin2Oct(): Bin2OctRequestBuilder {
        return new Bin2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist method.
    */
    public function binom_Dist(): Binom_DistRequestBuilder {
        return new Binom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Dist_Range method.
    */
    public function binom_Dist_Range(): Binom_Dist_RangeRequestBuilder {
        return new Binom_Dist_RangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the binom_Inv method.
    */
    public function binom_Inv(): Binom_InvRequestBuilder {
        return new Binom_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitand method.
    */
    public function bitand(): BitandRequestBuilder {
        return new BitandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitlshift method.
    */
    public function bitlshift(): BitlshiftRequestBuilder {
        return new BitlshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitor method.
    */
    public function bitor(): BitorRequestBuilder {
        return new BitorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitrshift method.
    */
    public function bitrshift(): BitrshiftRequestBuilder {
        return new BitrshiftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bitxor method.
    */
    public function bitxor(): BitxorRequestBuilder {
        return new BitxorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Math method.
    */
    public function ceiling_Math(): Ceiling_MathRequestBuilder {
        return new Ceiling_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ceiling_Precise method.
    */
    public function ceiling_Precise(): Ceiling_PreciseRequestBuilder {
        return new Ceiling_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the char method.
    */
    public function char(): CharRequestBuilder {
        return new CharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist method.
    */
    public function chiSq_Dist(): ChiSq_DistRequestBuilder {
        return new ChiSq_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Dist_RT method.
    */
    public function chiSq_Dist_RT(): ChiSq_Dist_RTRequestBuilder {
        return new ChiSq_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv method.
    */
    public function chiSq_Inv(): ChiSq_InvRequestBuilder {
        return new ChiSq_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the chiSq_Inv_RT method.
    */
    public function chiSq_Inv_RT(): ChiSq_Inv_RTRequestBuilder {
        return new ChiSq_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the choose method.
    */
    public function choose(): ChooseRequestBuilder {
        return new ChooseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clean method.
    */
    public function clean(): CleanRequestBuilder {
        return new CleanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the code method.
    */
    public function code(): CodeRequestBuilder {
        return new CodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the columns method.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combin method.
    */
    public function combin(): CombinRequestBuilder {
        return new CombinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the combina method.
    */
    public function combina(): CombinaRequestBuilder {
        return new CombinaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the complex method.
    */
    public function complex(): ComplexRequestBuilder {
        return new ComplexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the concatenate method.
    */
    public function concatenate(): ConcatenateRequestBuilder {
        return new ConcatenateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_Norm method.
    */
    public function confidence_Norm(): Confidence_NormRequestBuilder {
        return new Confidence_NormRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confidence_T method.
    */
    public function confidence_T(): Confidence_TRequestBuilder {
        return new Confidence_TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the convert method.
    */
    public function convert(): ConvertRequestBuilder {
        return new ConvertRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cos method.
    */
    public function cos(): CosRequestBuilder {
        return new CosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cosh method.
    */
    public function cosh(): CoshRequestBuilder {
        return new CoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cot method.
    */
    public function cot(): CotRequestBuilder {
        return new CotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coth method.
    */
    public function coth(): CothRequestBuilder {
        return new CothRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the count method.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countA method.
    */
    public function countA(): CountARequestBuilder {
        return new CountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countBlank method.
    */
    public function countBlank(): CountBlankRequestBuilder {
        return new CountBlankRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIf method.
    */
    public function countIf(): CountIfRequestBuilder {
        return new CountIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the countIfs method.
    */
    public function countIfs(): CountIfsRequestBuilder {
        return new CountIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDayBs method.
    */
    public function coupDayBs(): CoupDayBsRequestBuilder {
        return new CoupDayBsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDays method.
    */
    public function coupDays(): CoupDaysRequestBuilder {
        return new CoupDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupDaysNc method.
    */
    public function coupDaysNc(): CoupDaysNcRequestBuilder {
        return new CoupDaysNcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNcd method.
    */
    public function coupNcd(): CoupNcdRequestBuilder {
        return new CoupNcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupNum method.
    */
    public function coupNum(): CoupNumRequestBuilder {
        return new CoupNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the coupPcd method.
    */
    public function coupPcd(): CoupPcdRequestBuilder {
        return new CoupPcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csc method.
    */
    public function csc(): CscRequestBuilder {
        return new CscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the csch method.
    */
    public function csch(): CschRequestBuilder {
        return new CschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumIPmt method.
    */
    public function cumIPmt(): CumIPmtRequestBuilder {
        return new CumIPmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cumPrinc method.
    */
    public function cumPrinc(): CumPrincRequestBuilder {
        return new CumPrincRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the date method.
    */
    public function date(): DateRequestBuilder {
        return new DateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the datevalue method.
    */
    public function datevalue(): DatevalueRequestBuilder {
        return new DatevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the daverage method.
    */
    public function daverage(): DaverageRequestBuilder {
        return new DaverageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the day method.
    */
    public function day(): DayRequestBuilder {
        return new DayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days method.
    */
    public function days(): DaysRequestBuilder {
        return new DaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the days360 method.
    */
    public function days360(): Days360RequestBuilder {
        return new Days360RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the db method.
    */
    public function db(): DbRequestBuilder {
        return new DbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dbcs method.
    */
    public function dbcs(): DbcsRequestBuilder {
        return new DbcsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcount method.
    */
    public function dcount(): DcountRequestBuilder {
        return new DcountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dcountA method.
    */
    public function dcountA(): DcountARequestBuilder {
        return new DcountARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ddb method.
    */
    public function ddb(): DdbRequestBuilder {
        return new DdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Bin method.
    */
    public function dec2Bin(): Dec2BinRequestBuilder {
        return new Dec2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Hex method.
    */
    public function dec2Hex(): Dec2HexRequestBuilder {
        return new Dec2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dec2Oct method.
    */
    public function dec2Oct(): Dec2OctRequestBuilder {
        return new Dec2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the decimal method.
    */
    public function decimal(): DecimalRequestBuilder {
        return new DecimalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the degrees method.
    */
    public function degrees(): DegreesRequestBuilder {
        return new DegreesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the devSq method.
    */
    public function devSq(): DevSqRequestBuilder {
        return new DevSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dget method.
    */
    public function dget(): DgetRequestBuilder {
        return new DgetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disc method.
    */
    public function disc(): DiscRequestBuilder {
        return new DiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmax method.
    */
    public function dmax(): DmaxRequestBuilder {
        return new DmaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dmin method.
    */
    public function dmin(): DminRequestBuilder {
        return new DminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollar method.
    */
    public function dollar(): DollarRequestBuilder {
        return new DollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarDe method.
    */
    public function dollarDe(): DollarDeRequestBuilder {
        return new DollarDeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dollarFr method.
    */
    public function dollarFr(): DollarFrRequestBuilder {
        return new DollarFrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dproduct method.
    */
    public function dproduct(): DproductRequestBuilder {
        return new DproductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDev method.
    */
    public function dstDev(): DstDevRequestBuilder {
        return new DstDevRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dstDevP method.
    */
    public function dstDevP(): DstDevPRequestBuilder {
        return new DstDevPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dsum method.
    */
    public function dsum(): DsumRequestBuilder {
        return new DsumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the duration method.
    */
    public function duration(): DurationRequestBuilder {
        return new DurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvar method.
    */
    public function dvar(): DvarRequestBuilder {
        return new DvarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dvarP method.
    */
    public function dvarP(): DvarPRequestBuilder {
        return new DvarPRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ecma_Ceiling method.
    */
    public function ecma_Ceiling(): Ecma_CeilingRequestBuilder {
        return new Ecma_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the edate method.
    */
    public function edate(): EdateRequestBuilder {
        return new EdateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the effect method.
    */
    public function effect(): EffectRequestBuilder {
        return new EffectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the eoMonth method.
    */
    public function eoMonth(): EoMonthRequestBuilder {
        return new EoMonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf method.
    */
    public function erf(): ErfRequestBuilder {
        return new ErfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erf_Precise method.
    */
    public function erf_Precise(): Erf_PreciseRequestBuilder {
        return new Erf_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC method.
    */
    public function erfC(): ErfCRequestBuilder {
        return new ErfCRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the erfC_Precise method.
    */
    public function erfC_Precise(): ErfC_PreciseRequestBuilder {
        return new ErfC_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the error_Type method.
    */
    public function error_Type(): Error_TypeRequestBuilder {
        return new Error_TypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the and method.
    */
    public function escapedAnd(): AndRequestBuilder {
        return new AndRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the if method.
    */
    public function escapedIf(): IfRequestBuilder {
        return new IfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the or method.
    */
    public function escapedOr(): OrRequestBuilder {
        return new OrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xor method.
    */
    public function escapedXor(): XorRequestBuilder {
        return new XorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yield method.
    */
    public function escapedYield(): YieldRequestBuilder {
        return new YieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the even method.
    */
    public function even(): EvenRequestBuilder {
        return new EvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exact method.
    */
    public function exact(): ExactRequestBuilder {
        return new ExactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the exp method.
    */
    public function exp(): ExpRequestBuilder {
        return new ExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the expon_Dist method.
    */
    public function expon_Dist(): Expon_DistRequestBuilder {
        return new Expon_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist method.
    */
    public function f_Dist(): F_DistRequestBuilder {
        return new F_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Dist_RT method.
    */
    public function f_Dist_RT(): F_Dist_RTRequestBuilder {
        return new F_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv method.
    */
    public function f_Inv(): F_InvRequestBuilder {
        return new F_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the f_Inv_RT method.
    */
    public function f_Inv_RT(): F_Inv_RTRequestBuilder {
        return new F_Inv_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fact method.
    */
    public function fact(): FactRequestBuilder {
        return new FactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the factDouble method.
    */
    public function factDouble(): FactDoubleRequestBuilder {
        return new FactDoubleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the false method.
    */
    public function false(): FalseRequestBuilder {
        return new FalseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the find method.
    */
    public function find(): FindRequestBuilder {
        return new FindRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the findB method.
    */
    public function findB(): FindBRequestBuilder {
        return new FindBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisher method.
    */
    public function fisher(): FisherRequestBuilder {
        return new FisherRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fisherInv method.
    */
    public function fisherInv(): FisherInvRequestBuilder {
        return new FisherInvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fixed method.
    */
    public function fixed(): FixedRequestBuilder {
        return new FixedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Math method.
    */
    public function floor_Math(): Floor_MathRequestBuilder {
        return new Floor_MathRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the floor_Precise method.
    */
    public function floor_Precise(): Floor_PreciseRequestBuilder {
        return new Floor_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fv method.
    */
    public function fv(): FvRequestBuilder {
        return new FvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the fvschedule method.
    */
    public function fvschedule(): FvscheduleRequestBuilder {
        return new FvscheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma method.
    */
    public function gamma(): GammaRequestBuilder {
        return new GammaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Dist method.
    */
    public function gamma_Dist(): Gamma_DistRequestBuilder {
        return new Gamma_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gamma_Inv method.
    */
    public function gamma_Inv(): Gamma_InvRequestBuilder {
        return new Gamma_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn method.
    */
    public function gammaLn(): GammaLnRequestBuilder {
        return new GammaLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gammaLn_Precise method.
    */
    public function gammaLn_Precise(): GammaLn_PreciseRequestBuilder {
        return new GammaLn_PreciseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gauss method.
    */
    public function gauss(): GaussRequestBuilder {
        return new GaussRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the gcd method.
    */
    public function gcd(): GcdRequestBuilder {
        return new GcdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geoMean method.
    */
    public function geoMean(): GeoMeanRequestBuilder {
        return new GeoMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the geStep method.
    */
    public function geStep(): GeStepRequestBuilder {
        return new GeStepRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the harMean method.
    */
    public function harMean(): HarMeanRequestBuilder {
        return new HarMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Bin method.
    */
    public function hex2Bin(): Hex2BinRequestBuilder {
        return new Hex2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Dec method.
    */
    public function hex2Dec(): Hex2DecRequestBuilder {
        return new Hex2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hex2Oct method.
    */
    public function hex2Oct(): Hex2OctRequestBuilder {
        return new Hex2OctRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hlookup method.
    */
    public function hlookup(): HlookupRequestBuilder {
        return new HlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hour method.
    */
    public function hour(): HourRequestBuilder {
        return new HourRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hyperlink method.
    */
    public function hyperlink(): HyperlinkRequestBuilder {
        return new HyperlinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hypGeom_Dist method.
    */
    public function hypGeom_Dist(): HypGeom_DistRequestBuilder {
        return new HypGeom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imAbs method.
    */
    public function imAbs(): ImAbsRequestBuilder {
        return new ImAbsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imaginary method.
    */
    public function imaginary(): ImaginaryRequestBuilder {
        return new ImaginaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imArgument method.
    */
    public function imArgument(): ImArgumentRequestBuilder {
        return new ImArgumentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imConjugate method.
    */
    public function imConjugate(): ImConjugateRequestBuilder {
        return new ImConjugateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCos method.
    */
    public function imCos(): ImCosRequestBuilder {
        return new ImCosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCosh method.
    */
    public function imCosh(): ImCoshRequestBuilder {
        return new ImCoshRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCot method.
    */
    public function imCot(): ImCotRequestBuilder {
        return new ImCotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsc method.
    */
    public function imCsc(): ImCscRequestBuilder {
        return new ImCscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imCsch method.
    */
    public function imCsch(): ImCschRequestBuilder {
        return new ImCschRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imDiv method.
    */
    public function imDiv(): ImDivRequestBuilder {
        return new ImDivRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imExp method.
    */
    public function imExp(): ImExpRequestBuilder {
        return new ImExpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLn method.
    */
    public function imLn(): ImLnRequestBuilder {
        return new ImLnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog10 method.
    */
    public function imLog10(): ImLog10RequestBuilder {
        return new ImLog10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imLog2 method.
    */
    public function imLog2(): ImLog2RequestBuilder {
        return new ImLog2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imPower method.
    */
    public function imPower(): ImPowerRequestBuilder {
        return new ImPowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imProduct method.
    */
    public function imProduct(): ImProductRequestBuilder {
        return new ImProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imReal method.
    */
    public function imReal(): ImRealRequestBuilder {
        return new ImRealRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSec method.
    */
    public function imSec(): ImSecRequestBuilder {
        return new ImSecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSech method.
    */
    public function imSech(): ImSechRequestBuilder {
        return new ImSechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSin method.
    */
    public function imSin(): ImSinRequestBuilder {
        return new ImSinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSinh method.
    */
    public function imSinh(): ImSinhRequestBuilder {
        return new ImSinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSqrt method.
    */
    public function imSqrt(): ImSqrtRequestBuilder {
        return new ImSqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSub method.
    */
    public function imSub(): ImSubRequestBuilder {
        return new ImSubRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imSum method.
    */
    public function imSum(): ImSumRequestBuilder {
        return new ImSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the imTan method.
    */
    public function imTan(): ImTanRequestBuilder {
        return new ImTanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the int method.
    */
    public function int(): IntRequestBuilder {
        return new IntRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the intRate method.
    */
    public function intRate(): IntRateRequestBuilder {
        return new IntRateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ipmt method.
    */
    public function ipmt(): IpmtRequestBuilder {
        return new IpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the irr method.
    */
    public function irr(): IrrRequestBuilder {
        return new IrrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isErr method.
    */
    public function isErr(): IsErrRequestBuilder {
        return new IsErrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isError method.
    */
    public function isError(): IsErrorRequestBuilder {
        return new IsErrorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isEven method.
    */
    public function isEven(): IsEvenRequestBuilder {
        return new IsEvenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isFormula method.
    */
    public function isFormula(): IsFormulaRequestBuilder {
        return new IsFormulaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isLogical method.
    */
    public function isLogical(): IsLogicalRequestBuilder {
        return new IsLogicalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNA method.
    */
    public function isNA(): IsNARequestBuilder {
        return new IsNARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNonText method.
    */
    public function isNonText(): IsNonTextRequestBuilder {
        return new IsNonTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isNumber method.
    */
    public function isNumber(): IsNumberRequestBuilder {
        return new IsNumberRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the iso_Ceiling method.
    */
    public function iso_Ceiling(): Iso_CeilingRequestBuilder {
        return new Iso_CeilingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isOdd method.
    */
    public function isOdd(): IsOddRequestBuilder {
        return new IsOddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isoWeekNum method.
    */
    public function isoWeekNum(): IsoWeekNumRequestBuilder {
        return new IsoWeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ispmt method.
    */
    public function ispmt(): IspmtRequestBuilder {
        return new IspmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isref method.
    */
    public function isref(): IsrefRequestBuilder {
        return new IsrefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isText method.
    */
    public function isText(): IsTextRequestBuilder {
        return new IsTextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the kurt method.
    */
    public function kurt(): KurtRequestBuilder {
        return new KurtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the large method.
    */
    public function large(): LargeRequestBuilder {
        return new LargeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lcm method.
    */
    public function lcm(): LcmRequestBuilder {
        return new LcmRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the left method.
    */
    public function left(): LeftRequestBuilder {
        return new LeftRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the leftb method.
    */
    public function leftb(): LeftbRequestBuilder {
        return new LeftbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the len method.
    */
    public function len(): LenRequestBuilder {
        return new LenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lenb method.
    */
    public function lenb(): LenbRequestBuilder {
        return new LenbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ln method.
    */
    public function ln(): LnRequestBuilder {
        return new LnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log method.
    */
    public function log(): LogRequestBuilder {
        return new LogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the log10 method.
    */
    public function log10(): Log10RequestBuilder {
        return new Log10RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Dist method.
    */
    public function logNorm_Dist(): LogNorm_DistRequestBuilder {
        return new LogNorm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logNorm_Inv method.
    */
    public function logNorm_Inv(): LogNorm_InvRequestBuilder {
        return new LogNorm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lookup method.
    */
    public function lookup(): LookupRequestBuilder {
        return new LookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lower method.
    */
    public function lower(): LowerRequestBuilder {
        return new LowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the match method.
    */
    public function match(): MatchRequestBuilder {
        return new MatchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the max method.
    */
    public function max(): MaxRequestBuilder {
        return new MaxRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the maxA method.
    */
    public function maxA(): MaxARequestBuilder {
        return new MaxARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mduration method.
    */
    public function mduration(): MdurationRequestBuilder {
        return new MdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the median method.
    */
    public function median(): MedianRequestBuilder {
        return new MedianRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mid method.
    */
    public function mid(): MidRequestBuilder {
        return new MidRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the midb method.
    */
    public function midb(): MidbRequestBuilder {
        return new MidbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the min method.
    */
    public function min(): MinRequestBuilder {
        return new MinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minA method.
    */
    public function minA(): MinARequestBuilder {
        return new MinARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the minute method.
    */
    public function minute(): MinuteRequestBuilder {
        return new MinuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mirr method.
    */
    public function mirr(): MirrRequestBuilder {
        return new MirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mod method.
    */
    public function mod(): ModRequestBuilder {
        return new ModRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the month method.
    */
    public function month(): MonthRequestBuilder {
        return new MonthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mround method.
    */
    public function mround(): MroundRequestBuilder {
        return new MroundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the multiNomial method.
    */
    public function multiNomial(): MultiNomialRequestBuilder {
        return new MultiNomialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the n method.
    */
    public function n(): NRequestBuilder {
        return new NRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the na method.
    */
    public function na(): NaRequestBuilder {
        return new NaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the negBinom_Dist method.
    */
    public function negBinom_Dist(): NegBinom_DistRequestBuilder {
        return new NegBinom_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays method.
    */
    public function networkDays(): NetworkDaysRequestBuilder {
        return new NetworkDaysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the networkDays_Intl method.
    */
    public function networkDays_Intl(): NetworkDays_IntlRequestBuilder {
        return new NetworkDays_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nominal method.
    */
    public function nominal(): NominalRequestBuilder {
        return new NominalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Dist method.
    */
    public function norm_Dist(): Norm_DistRequestBuilder {
        return new Norm_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_Inv method.
    */
    public function norm_Inv(): Norm_InvRequestBuilder {
        return new Norm_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Dist method.
    */
    public function norm_S_Dist(): Norm_S_DistRequestBuilder {
        return new Norm_S_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the norm_S_Inv method.
    */
    public function norm_S_Inv(): Norm_S_InvRequestBuilder {
        return new Norm_S_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the not method.
    */
    public function not(): NotRequestBuilder {
        return new NotRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the now method.
    */
    public function now(): NowRequestBuilder {
        return new NowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the nper method.
    */
    public function nper(): NperRequestBuilder {
        return new NperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the npv method.
    */
    public function npv(): NpvRequestBuilder {
        return new NpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the numberValue method.
    */
    public function numberValue(): NumberValueRequestBuilder {
        return new NumberValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Bin method.
    */
    public function oct2Bin(): Oct2BinRequestBuilder {
        return new Oct2BinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Dec method.
    */
    public function oct2Dec(): Oct2DecRequestBuilder {
        return new Oct2DecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oct2Hex method.
    */
    public function oct2Hex(): Oct2HexRequestBuilder {
        return new Oct2HexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the odd method.
    */
    public function odd(): OddRequestBuilder {
        return new OddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFPrice method.
    */
    public function oddFPrice(): OddFPriceRequestBuilder {
        return new OddFPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddFYield method.
    */
    public function oddFYield(): OddFYieldRequestBuilder {
        return new OddFYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLPrice method.
    */
    public function oddLPrice(): OddLPriceRequestBuilder {
        return new OddLPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the oddLYield method.
    */
    public function oddLYield(): OddLYieldRequestBuilder {
        return new OddLYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pduration method.
    */
    public function pduration(): PdurationRequestBuilder {
        return new PdurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Exc method.
    */
    public function percentile_Exc(): Percentile_ExcRequestBuilder {
        return new Percentile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentile_Inc method.
    */
    public function percentile_Inc(): Percentile_IncRequestBuilder {
        return new Percentile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Exc method.
    */
    public function percentRank_Exc(): PercentRank_ExcRequestBuilder {
        return new PercentRank_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the percentRank_Inc method.
    */
    public function percentRank_Inc(): PercentRank_IncRequestBuilder {
        return new PercentRank_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permut method.
    */
    public function permut(): PermutRequestBuilder {
        return new PermutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permutationa method.
    */
    public function permutationa(): PermutationaRequestBuilder {
        return new PermutationaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the phi method.
    */
    public function phi(): PhiRequestBuilder {
        return new PhiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pi method.
    */
    public function pi(): PiRequestBuilder {
        return new PiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pmt method.
    */
    public function pmt(): PmtRequestBuilder {
        return new PmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the poisson_Dist method.
    */
    public function poisson_Dist(): Poisson_DistRequestBuilder {
        return new Poisson_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the power method.
    */
    public function power(): PowerRequestBuilder {
        return new PowerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ppmt method.
    */
    public function ppmt(): PpmtRequestBuilder {
        return new PpmtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the price method.
    */
    public function price(): PriceRequestBuilder {
        return new PriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceDisc method.
    */
    public function priceDisc(): PriceDiscRequestBuilder {
        return new PriceDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the priceMat method.
    */
    public function priceMat(): PriceMatRequestBuilder {
        return new PriceMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the product method.
    */
    public function product(): ProductRequestBuilder {
        return new ProductRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the proper method.
    */
    public function proper(): ProperRequestBuilder {
        return new ProperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the pv method.
    */
    public function pv(): PvRequestBuilder {
        return new PvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Exc method.
    */
    public function quartile_Exc(): Quartile_ExcRequestBuilder {
        return new Quartile_ExcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quartile_Inc method.
    */
    public function quartile_Inc(): Quartile_IncRequestBuilder {
        return new Quartile_IncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the quotient method.
    */
    public function quotient(): QuotientRequestBuilder {
        return new QuotientRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the radians method.
    */
    public function radians(): RadiansRequestBuilder {
        return new RadiansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rand method.
    */
    public function rand(): RandRequestBuilder {
        return new RandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the randBetween method.
    */
    public function randBetween(): RandBetweenRequestBuilder {
        return new RandBetweenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Avg method.
    */
    public function rank_Avg(): Rank_AvgRequestBuilder {
        return new Rank_AvgRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rank_Eq method.
    */
    public function rank_Eq(): Rank_EqRequestBuilder {
        return new Rank_EqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rate method.
    */
    public function rate(): RateRequestBuilder {
        return new RateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the received method.
    */
    public function received(): ReceivedRequestBuilder {
        return new ReceivedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replace method.
    */
    public function replace(): ReplaceRequestBuilder {
        return new ReplaceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the replaceB method.
    */
    public function replaceB(): ReplaceBRequestBuilder {
        return new ReplaceBRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rept method.
    */
    public function rept(): ReptRequestBuilder {
        return new ReptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the right method.
    */
    public function right(): RightRequestBuilder {
        return new RightRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rightb method.
    */
    public function rightb(): RightbRequestBuilder {
        return new RightbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roman method.
    */
    public function roman(): RomanRequestBuilder {
        return new RomanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the round method.
    */
    public function round(): RoundRequestBuilder {
        return new RoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundDown method.
    */
    public function roundDown(): RoundDownRequestBuilder {
        return new RoundDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roundUp method.
    */
    public function roundUp(): RoundUpRequestBuilder {
        return new RoundUpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rows method.
    */
    public function rows(): RowsRequestBuilder {
        return new RowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rri method.
    */
    public function rri(): RriRequestBuilder {
        return new RriRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sec method.
    */
    public function sec(): SecRequestBuilder {
        return new SecRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sech method.
    */
    public function sech(): SechRequestBuilder {
        return new SechRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the second method.
    */
    public function second(): SecondRequestBuilder {
        return new SecondRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the seriesSum method.
    */
    public function seriesSum(): SeriesSumRequestBuilder {
        return new SeriesSumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheet method.
    */
    public function sheet(): SheetRequestBuilder {
        return new SheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sheets method.
    */
    public function sheets(): SheetsRequestBuilder {
        return new SheetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sign method.
    */
    public function sign(): SignRequestBuilder {
        return new SignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sin method.
    */
    public function sin(): SinRequestBuilder {
        return new SinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sinh method.
    */
    public function sinh(): SinhRequestBuilder {
        return new SinhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew method.
    */
    public function skew(): SkewRequestBuilder {
        return new SkewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the skew_p method.
    */
    public function skew_p(): Skew_pRequestBuilder {
        return new Skew_pRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sln method.
    */
    public function sln(): SlnRequestBuilder {
        return new SlnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the small method.
    */
    public function small(): SmallRequestBuilder {
        return new SmallRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrt method.
    */
    public function sqrt(): SqrtRequestBuilder {
        return new SqrtRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sqrtPi method.
    */
    public function sqrtPi(): SqrtPiRequestBuilder {
        return new SqrtPiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the standardize method.
    */
    public function standardize(): StandardizeRequestBuilder {
        return new StandardizeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_P method.
    */
    public function stDev_P(): StDev_PRequestBuilder {
        return new StDev_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDev_S method.
    */
    public function stDev_S(): StDev_SRequestBuilder {
        return new StDev_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevA method.
    */
    public function stDevA(): StDevARequestBuilder {
        return new StDevARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stDevPA method.
    */
    public function stDevPA(): StDevPARequestBuilder {
        return new StDevPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the substitute method.
    */
    public function substitute(): SubstituteRequestBuilder {
        return new SubstituteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subtotal method.
    */
    public function subtotal(): SubtotalRequestBuilder {
        return new SubtotalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sum method.
    */
    public function sum(): SumRequestBuilder {
        return new SumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIf method.
    */
    public function sumIf(): SumIfRequestBuilder {
        return new SumIfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumIfs method.
    */
    public function sumIfs(): SumIfsRequestBuilder {
        return new SumIfsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sumSq method.
    */
    public function sumSq(): SumSqRequestBuilder {
        return new SumSqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syd method.
    */
    public function syd(): SydRequestBuilder {
        return new SydRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t method.
    */
    public function t(): TRequestBuilder {
        return new TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist method.
    */
    public function t_Dist(): T_DistRequestBuilder {
        return new T_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_2T method.
    */
    public function t_Dist_2T(): T_Dist_2TRequestBuilder {
        return new T_Dist_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Dist_RT method.
    */
    public function t_Dist_RT(): T_Dist_RTRequestBuilder {
        return new T_Dist_RTRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv method.
    */
    public function t_Inv(): T_InvRequestBuilder {
        return new T_InvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the t_Inv_2T method.
    */
    public function t_Inv_2T(): T_Inv_2TRequestBuilder {
        return new T_Inv_2TRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tan method.
    */
    public function tan(): TanRequestBuilder {
        return new TanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tanh method.
    */
    public function tanh(): TanhRequestBuilder {
        return new TanhRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillEq method.
    */
    public function tbillEq(): TbillEqRequestBuilder {
        return new TbillEqRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillPrice method.
    */
    public function tbillPrice(): TbillPriceRequestBuilder {
        return new TbillPriceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the tbillYield method.
    */
    public function tbillYield(): TbillYieldRequestBuilder {
        return new TbillYieldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the text method.
    */
    public function text(): TextRequestBuilder {
        return new TextRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the time method.
    */
    public function time(): TimeRequestBuilder {
        return new TimeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the timevalue method.
    */
    public function timevalue(): TimevalueRequestBuilder {
        return new TimevalueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the today method.
    */
    public function today(): TodayRequestBuilder {
        return new TodayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trim method.
    */
    public function trim(): TrimRequestBuilder {
        return new TrimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trimMean method.
    */
    public function trimMean(): TrimMeanRequestBuilder {
        return new TrimMeanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the true method.
    */
    public function true(): TrueRequestBuilder {
        return new TrueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the trunc method.
    */
    public function trunc(): TruncRequestBuilder {
        return new TruncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the type method.
    */
    public function type(): TypeRequestBuilder {
        return new TypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unichar method.
    */
    public function unichar(): UnicharRequestBuilder {
        return new UnicharRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unicode method.
    */
    public function unicode(): UnicodeRequestBuilder {
        return new UnicodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the upper method.
    */
    public function upper(): UpperRequestBuilder {
        return new UpperRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usdollar method.
    */
    public function usdollar(): UsdollarRequestBuilder {
        return new UsdollarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the value method.
    */
    public function value(): ValueRequestBuilder {
        return new ValueRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_P method.
    */
    public function var_P(): Var_PRequestBuilder {
        return new Var_PRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the var_S method.
    */
    public function var_S(): Var_SRequestBuilder {
        return new Var_SRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varA method.
    */
    public function varA(): VarARequestBuilder {
        return new VarARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the varPA method.
    */
    public function varPA(): VarPARequestBuilder {
        return new VarPARequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vdb method.
    */
    public function vdb(): VdbRequestBuilder {
        return new VdbRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the vlookup method.
    */
    public function vlookup(): VlookupRequestBuilder {
        return new VlookupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekday method.
    */
    public function weekday(): WeekdayRequestBuilder {
        return new WeekdayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weekNum method.
    */
    public function weekNum(): WeekNumRequestBuilder {
        return new WeekNumRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the weibull_Dist method.
    */
    public function weibull_Dist(): Weibull_DistRequestBuilder {
        return new Weibull_DistRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay method.
    */
    public function workDay(): WorkDayRequestBuilder {
        return new WorkDayRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the workDay_Intl method.
    */
    public function workDay_Intl(): WorkDay_IntlRequestBuilder {
        return new WorkDay_IntlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xirr method.
    */
    public function xirr(): XirrRequestBuilder {
        return new XirrRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the xnpv method.
    */
    public function xnpv(): XnpvRequestBuilder {
        return new XnpvRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the year method.
    */
    public function year(): YearRequestBuilder {
        return new YearRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yearFrac method.
    */
    public function yearFrac(): YearFracRequestBuilder {
        return new YearFracRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldDisc method.
    */
    public function yieldDisc(): YieldDiscRequestBuilder {
        return new YieldDiscRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the yieldMat method.
    */
    public function yieldMat(): YieldMatRequestBuilder {
        return new YieldMatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the z_Test method.
    */
    public function z_Test(): Z_TestRequestBuilder {
        return new Z_TestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FunctionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/functions{?%24select,%24expand}');
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
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
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
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
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
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
