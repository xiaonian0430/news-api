<?php
/**
 * @author=> Xiao Nian
 * @contact=> xiaonian030@163.com

 * @version=> 1.0
 * @license=> Apache Licence
 * @file=> Index.php
 * @time=> 2019-12-01 14=>00
 */
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\EasySwoole\Config;
use EasySwoole\Http\Message\Status;

class Index extends Controller
{
    /**
    * 获取数据
    */
    public function index()
    {
        $data = [
            [
                "id"=>121375,
                "post_id"=>"5310910",
                "title"=>"为什么自动驾驶诉讼不断？",
                "author_name"=>"未来汽车日报",
                "cover"=>"https://img.36krcdn.com/20200410/v2_9c3331af67e64994aa97a27fffb1a380_img_png?x-oss-process=image/resize,m_mfit,w_520,h_300/crop,w_520,h_300,g_center",
                "published_at"=>"2020-04-11 17:07:48",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121374,
                "post_id"=>"5310906",
                "title"=>"2020数字中国创新大赛-数字政府赛道21强出炉，四大赛题紧贴政府数字化发展需求",
                "author_name"=>"36氪深度服务",
                "cover"=>"https://img.36krcdn.com/20200411/v2_16417a06088947debe0450950f8fc813_img_png",
                "published_at"=>"2020-04-11 16:59:15",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121373,
                "post_id"=>"5310903",
                "title"=>"地方政府救市哪家强？广州补贴上万元，广深杭新增指标超5万",
                "author_name"=>"未来汽车日报",
                "cover"=>"https://img.36krcdn.com/20200410/v2_6905947498bc4ec0af228afed409f771_img_png?x-oss-process=image/resize,m_mfit,w_520,h_300/crop,w_520,h_300,g_center",
                "published_at"=>"2020-04-11 16:09:09",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121372,
                "post_id"=>"5310813",
                "title"=>"救命呼吸机缺口难补！一文扒开供应链真相",
                "author_name"=>"智东西",
                "cover"=>"https://img.36krcdn.com/20200410/v2_86bbf8245f754be79f3386a82b385093_img_000",
                "published_at"=>"2020-04-11 15:40:02",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121371,
                "post_id"=>"5309573",
                "title"=>"每月节省32%的开支，我是怎么做到的？",
                "author_name"=>"神译局",
                "cover"=>"https://img.36krcdn.com/20200408/v2_c67c3edfe4b5446992b32fad93a44a75_img_png",
                "published_at"=>"2020-04-11 14:48:02",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121369,
                "post_id"=>"5310859",
                "title"=>"瓜子坚果双增长，但洽洽并不能高枕无忧",
                "author_name"=>"资本侦探",
                "cover"=>"https://img.36krcdn.com/20200411/v2_2204c6132432403184e43df22485545e_img_000?x-oss-process=image/resize,m_mfit,w_432,h_288/crop,w_432,h_288,g_center",
                "published_at"=>"2020-04-11 14:23:00",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121367,
                "post_id"=>"5309137",
                "title"=>"克服危机和压力，精神力量强大的人都有这5个习惯",
                "author_name"=>"神译局",
                "cover"=>"https://img.36krcdn.com/20200406/v2_d2c6a686b4074a1eb43603e67d6ba204_img_png",
                "published_at"=>"2020-04-11 13:47:01",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121365,
                "post_id"=>"5310864",
                "title"=>"神州租车找爹记",
                "author_name"=>"PingWest品玩",
                "cover"=>"https://img.36krcdn.com/20200411/v2_f497b1c414d5489791569b3ea99df33d_img_000",
                "published_at"=>"2020-04-11 13:39:00",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121366,
                "post_id"=>"5310884",
                "title"=>"​抖音快手明星图鉴：哪个平台更适合明星“再就业”？",
                "author_name"=>"明星八爪娱",
                "cover"=>"https=>//img.36krcdn.com/20200411/v2_da4c26244cbc494c8e0e5918518e866c_img_png",
                "published_at"=>"2020-04-11 13=>38=>00",
                "comments_count"=>0,
                "content"=>""
            ],
            [
                "id"=>121364,
                "post_id"=>"5309105",
                "title"=>"动荡的市场中，你需要牢记巴菲特的这3个原则",
                "author_name"=>"神译局",
                "cover"=>"https://img.36krcdn.com/20200406/v2_232e9248d5c74ff989db57a0b6713abe_img_png",
                "published_at"=>"2020-04-11 12:45:02",
                "comments_count"=>0,
                "content"=>""
            ]
        ];
        $result = [
            'data' => $data
        ];
        $this->writeJson(Status::CODE_OK, $result, 'ok');
    }

    public function detail()
    {
        $data = [
            "id"=> 121374,
            "from_id"=> "36kr",
            "title"=> "2020数字中国创新大赛-数字政府赛道21强出炉，四大赛题紧贴政府数字化发展需求",
            "summary"=> "提升数字治理、建设“温暖渔政”——四大赛题助力政府解决治理难题",
            "column_id"=> "0",
            "column_name"=> "",
            "author_name"=> "36氪深度服务",
            "author_email"=> "",
            "author_avatar"=> "https://img.36krcdn.com//20200410/v2_0c2b287a60494780b9021904758ae14b_img_000",
            "post_id"=> "5310906",
            "cover"=> "https://img.36krcdn.com/20200411/v2_16417a06088947debe0450950f8fc813_img_png",
            "content"=> "<p><span >3月18日至4月1日，数字中国创新大赛数字政府赛道举行了复赛阶段的线上评审，由数字中国建设峰会组委会联合福建省海洋与渔业局、数字中国研究院（福建）、阿里巴巴达摩院、知名高校、36kr、创投基金等组成的专家评审团，对50余支来自建筑智能普查、人机交互机器人、智慧社区建设、智慧海洋建设赛题的参赛团队，围绕产品技术、落地能力、团队竞争力和发展潜力多个维度进行了考核。</span></p><p>该赛道于1月1日启动报名通道，在两个月里吸引了全球16个国家和地区的4494支队伍报名参赛。经历初赛、复赛选拔后，最终21支队伍获得了评委的推荐，晋级决赛圈。</p><p><img style=\"max-width:100%\"  src=\"https://img.36krcdn.com/20200411/v2_b76cec37c1d04965859ca23c52384cba_img_png\" data-img-size-val=\"864,510\"/></p><p   class=\"img-desc\" ><span >（根据疫情防控需要，复赛采用“云路演”的方式进行）</span></p><p>据悉，2020数字中国创新大赛是数字中国建设峰会的高端专业核心赛事和重要组成部分，由数字中国建设峰会组委会主办。本届大赛以“培育数字经济新动能，助推数字中国新发展”为主题，采取多赛道并行的竞赛形式，设置了数字政府、智慧医疗、鲲鹏计算、虎符网络安全、区块链、中小学生等六大赛道，分别围绕政务大数据应用、信息技术创新应用、医疗行业智慧化、网络安全、区块链技术、中小学生兴趣培养等内容设置赛题。<span >&nbsp;</span></p><p>其中，数字政府赛道以发展新基建、推动福建省政务数字化升级为契机，围绕政务大数据展开，聚焦智慧海洋、政务服务、智慧社区、城市管理四大领域，设置1道智能算法赛题（智慧海洋建设）和3道创新应用赛题（建筑智能普查、人机交互机器人、智慧社区建设），以应用为导向，聚集全球顶级创新人才，发掘先进的数字技术与政务融合的创新应用成果，同时利用大数据提升政府治理能力和治理水平，加速形成福州乃至福建的数字经济新业态、进一步提升民众的获得感。<span >&nbsp;</span></p><p>据了解，当前在科技防疫的背景下，新基建及数字化治理已是大势所趋，并在全社会快速形成共识，而于去年推出的“数字政府赛道”则因与新形势高度“切题”而获得各方的高度关注。近几年致力于数字化“新基建”实践的阿里云不断加强对“新基建”的研究与布局，与作为“数字中国建设的思想源头和实践起点”的福州市合作，为数字化产业的发展“带了一波节奏”，让大赛真正作为平台，引导和推动了相关领域的创新和升级。<span >&nbsp;</span></p><p>比如，三道创新应用题­——建筑智能普查、人机交互机器人、智慧社区建设，都是依据福建省政府在数字化治理以及改善民生过程中面临的现实问题而设置的，且在实际治理中已有应用场景；智能算法赛题则结合智慧海洋、智慧渔政建设面临的问题，通过智能算法对渔业船舶进行动态监测，提升海洋资源保护与开发水平。</p><h2  >提升数字治理、建设“温暖渔政”——四大赛题助力政府解决治理难题<span >&nbsp;</span>工勾画精度虽高，效率却太低，难以普及。另一方面，“违建”作为当前城市治理当中一大难题，以“发现难、防控难、认定难，拆除更难”等特点为各方所关注。</p><p>当前技术发展使得这些问题得到更加高效解决。本次“建筑智能普查”赛题的参赛团队中，不少团队的解决方案通过遥感大数据、深度学习算法和AI计算，赋能遥感测绘、无人机测绘、图像识别的各个环节，帮助提高了建筑物提取的效率和精准度，并已应用于城市管理实践中。<span >&nbsp;</span></p><p>以视慧智图为例，针对竞赛数据中的建筑物风格多样、尺度多样及光谱特征混淆的问题，提出了将二维影像和三维模型融合的方法来增强建筑物提取的精度。该项目还将技术应用于城市违法建筑遥感智能监测作业平台，首创了“天空地”协同的渐进渐精式查违技术体系，提高了检测与调查取证效率，并且准确率高达95%，有效解决违章建筑“发现难、防控难、认定难，拆除更难”的问题。<span >&nbsp;</span></p><p>先进技术背后，是强大技术团队的支撑——视慧智图董事长朱庆教授是三维模型领域的知名专家，团队擅长语义分割模型、遥感影像建筑物提取、密集匹配及三维模型与二维影像匹配技术，已经是建筑物违建查证领域的头部玩家，目前该技术已经在重庆全域38个区县、浙江、湖南等地规模化应用。</p><p>“人机交互机器人”赛题以福州市12345便民（惠企）服务平台为切入点，作为福州市政府服务民众和企业的重要平台，12345由热线电话和网络系统构成，主要受理民众和企业提出的咨询、投诉、建议和求助。</p><p>如何大大提升12345便民（惠企）服务平台的服务能力，更好帮助民众和企业？“实在智能”团队给出“AI+RPA赋能市政热线客服”的解决方案，以95%以上的场景覆盖率和算法准确率，可将客服接单效率提高40%，可在市域12345热线1000-2000人的客服规模上节省500名客服，省域12345热线10000人的规模上可节省4000名客服。</p><p>其中，一些具备本土语言优势的项目也在大赛中获得了青睐。人工智能语音客服解决方案“意能通”，依靠逾10万条闽南语训练量，高达85%的准确率，服务于12345热线的经验，现在与福州电信建立了合作。</p><p>智慧社区建设赛题下，参赛项目以大数据、物联网、5G、云计算、人工智能、AR/VR等前沿技术建设智慧社区。“福州市鼓楼区军门社区”是福建省基于物联网和大数据技术打造的首个智慧社区，通过智慧养老、智慧安防、各类隐患自动预警、垃圾智慧监控等，提升市民生活体验.<span >&nbsp;</span></p><p>比如参赛项目“拓深科技”创新性地采用电流指纹技术，开发消防智能预警系统，不仅能进行基础电气火灾全面检测、隐形线路故障检测、用电行为精准检测以及各类电器设备的运行状态，面对隐患还能够及时发出预警或直接断电。这一系统将对未来的消防安全提供很好的预警机制，极大提升居民、商户的居住、经营安全程度，为福州政府的安全治理提供保障。</p><p><img style=\"max-width:100%\"  src=\"https://img.36krcdn.com/20200411/v2_ee486d23d9df41329c69ee8a169ed670_img_png\" data-img-size-val=\"864,485\"/></p><p   class=\"img-desc\" ><span >（福建省海渔局相关领导参与智慧海洋赛题复赛“云路演”）</span></p><p><span >海洋是高质量发展战略要地。经略海洋，信息优先。在海洋强国战略的引领下，推进海上安全治理体系和治理能力现代化已经成为重要使命。在运用数字技术解决海洋船舶安全管理问题的“智慧海洋建设”智能算法赛题应运而生。在国外对于船舶位置数据的应介绍说，复赛团队在测试数据集进行深入分析基础上，提出了一些新的研究和应用方向，部分团队对数据的可视化进行了创新性研究，突破了原有的思路，值得鼓励。</p><h2  >科技防疫、建筑安全监测，触发参赛团队推出应急方案&nbsp;</h2><p>春节以来，受疫情影响，各地纷纷采取社区隔离等多种防控措施，也给政府治理带来了新的挑战。面对疫情防控、复工复产等问题，四大赛题的参赛团队都在赛事内外结合自身能力优势拿出多种应对方案，结合赋能预防、治疗、服务的各个环节，帮助政府更好地治理疫情。<span >&nbsp;</span></p><p>智慧社区赛题的极视角在多个复工的物业部署了“红外热成像体温快速筛查仪”，极大提升了疫情筛查和检测效率，减轻物业工作人员测量体温的负担。零一科技则将智慧健康社区通行证与政府要求对接起来，形成特殊应急状况下的通行证功能健康码，推出社区配套新零售“种子集市”、智能物流机器人hachi delight、智慧医疗配套“家有健康”等智能配套产品，破解了安全采购、无接触配送、社区医疗等诸多传统社区痛点，形成全场景智慧社区解决方案，在特殊期间为业主生活提供便利。</p><p>人机交互机器人赛题下，来也科技推出舆情机器人，帮助当地政府普及疫情防控知识、避免谣言传播，其推出的智能外呼机器人已经在福州落地，可通过自动批量拨打电话，进行疫情通知等点对点外呼任务，帮助基层社区机构实时掌握居民的健康动态。</p><p>疫情之外，针对媒体报道近年多次出现的建筑坍塌事故，个别参赛团队对此推出了相应的解决方案，从物联网、大数据、遥感等技术切入帮助政府更好地监测城市建筑情况，更好的保障人民生命和财产安全。</p><p>比如本影科技的“文物保护建筑智慧监管系统”，可以通过先进的物联网技术、视频集成技术、无线传输技术等，将建筑物的实时物联监测（应力、倾斜、沉降、震动等）动态数据汇聚到平台数据库，通过日常对实时数据分析统计、自动判读警戒值，快速预警、及时推送通知等功能实现对建筑物进行实况监测跟踪，同时建立规范的日常巡检养护和修缮管理流程，实现在线数字化监控。该系统原本主要用于文物保护领域，但针对建筑安全监测问题，本影科技给出了相应的解决方案，可有效预警建筑物的老化，防止安全事故的发生。<span >&nbsp;</span></p><p>科技助力改善生活，既包含生活质量的提高，更包含生命安全的保障，此次数字政府赛道围绕科技防疫和建筑安全监测推出治理方案，既体现了参赛团队对赛题背后社会需求的敏锐把握，展示其本身的强烈社会责任感，也反映出福建省政府对全方位改善民生的重视。</p><p>“我们不希望大家‘为了比赛而比赛’或只停留在技术层面，我们组委会带着使命感来组织这个赛事，也希望项目团队从社会真实需求出发，让自己‘被需要’，让团队的发展拥有更好的市场基础。” 数字政府赛道承办方代表、阿里云天池大赛总负责人王听表示，在评选项目时，会比较关注项目的三大要素：新、紧、潜，新即新方案、新技术、新产品，有硬核的创新力和技术能力；紧即围绕数字政府建设，通过技术创新驱动政府治理体系和治理能力现代化，提升民众获得感；潜即该团队基础深厚并能很好把握趋势、具有高成长的潜力。</p><p>据悉，目前数字政府赛道复赛结束后，将有21支优秀团队进入决赛。决赛将于4月24-25日在杭州进行，在决赛胜出的团队将受邀参加在福州举行的2020数字中国建设峰会的“数字政府赛�ontent-Type,Authorization",
            "Date"=> "Thu, 27 Aug 2020 02:32:33 GMT",
        ];
        $result = [
            'data' => $data
        ];
        $this->response()->withHeader('Server', 'InfobirdCloud');
        $this->response()->write(json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->response()->withHeader('Content-type', 'application/json;charset=utf-8');
        $this->response()->withStatus(Status::CODE_OK);
        return true;
        $this->writeJson(Status::CODE_OK, $result, 'ok');
    }
}
