/*
 Navicat Premium Data Transfer

 Source Server         : mySQL
 Source Server Type    : MySQL
 Source Server Version : 80035
 Source Host           : localhost:3306
 Source Schema         : yii2advanced

 Target Server Type    : MySQL
 Target Server Version : 80035
 File Encoding         : 65001

 Date: 20/12/2023 19:59:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `user_id` int(0) NOT NULL COMMENT '用户id',
  `content` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '内容',
  `created_at` int(0) NOT NULL COMMENT '创建时间',
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '用户名',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1, 2, '以钢铁洪流开始，进入泥头车阶段。', 1664249678, 'HJX');
INSERT INTO `comment` VALUES (2, 3, '这场战争杂糅了多种思潮的碰撞与博弈，既有冷战延续、梦回苏联的痕迹，又带有反新纳粹主义的情绪；既有“用帝国主义去抵抗帝国主义”的嫌疑，更有莫斯科“打得一拳开，免得百拳来”的触底反弹。', 1665249609, 'hello');
INSERT INTO `comment` VALUES (3, 2, '当美西方把国际金融基础设施作为大国博弈的要挟工具时，我们该当如何。倘若这真的成为一个国家的某种命门把持在列强手中，那是不是在未来的某个时刻，国家战略面临重要抉择关头，国家利益遭受重大威胁时，我们首先想到的是“退一步海阔天空”呢？在俄罗斯面临北约战略挤压的三十多年里，普京并非没有忍让，甚至在早期还对西方尤其是欧洲有过不切实际的幻想。那么结果又是如何呢？不是你不想退一步，而是对方得寸进尺。', 1666249741, 'HJX');
INSERT INTO `comment` VALUES (4, 4, '关于俄罗斯主动开战，一度让许多学界大佬“不会开战”的预测翻了车。尽管大家都明白这是美国为首北约的一个阳谋：不开打，北约就继续东扩；开打了，北约也事实上实现了东扩。但我发现国际上有大量的决策机构、智囊团体都对“普京提出的谈判条件被美国晾在桌面上数月之久”的事实选择性无视。甚少有人去剖析普京提出“北约停止东扩”这个近乎于斩断自己回旋空间的提议意味着什么。', 1667249741, 'YX');
INSERT INTO `comment` VALUES (5, 5, '俄乌战争对一带一路战略和中欧班列有一定负面影响，但因祸得福，因此可以打通非常重要的南线，这一局，或许是得大于失，也不一定。', 1670249741, 'Aurora');
INSERT INTO `comment` VALUES (6, 3, '“中俄背靠背”，不是双方一时的“投机取巧”和“权宜之计”，不是谁对谁的施舍，而是中俄追求“全球安全再平衡”，包括“政治安全”、“经济安全”、“军事安全”和“非传统安全”的再平衡，以此共同捍卫人类的正义公平和世界的和平安宁！对我们赖以生存发展的这个世界，中俄有情，中俄有责，中俄必胜！', 1671249741, 'hello');
INSERT INTO `comment` VALUES (7, 4, '我并不支持战争,原因很简单：它会造成平民的流离。而我也是个平头老百姓。然后，我当然也希望在双方利益都得到关切的前提下，俄乌能够结束战争，坐回谈判桌上。', 1672249741, 'YX');
INSERT INTO `comment` VALUES (8, 5, '国小而不处卑，力少而不畏强，无礼而侮大邻，贪愎而拙交者，可亡也。', 1672949741, 'Aurora');

-- ----------------------------
-- Table structure for countriesview
-- ----------------------------
DROP TABLE IF EXISTS `countriesview`;
CREATE TABLE `countriesview`  (
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '国家',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '人名',
  `view` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '观点',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片',
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of countriesview
-- ----------------------------
INSERT INTO `countriesview` VALUES ('美国', '约瑟夫·拜登', '俄罗斯入侵乌克兰是一个最古老的人类冲动的例子，使用残酷力量和虚假信息来满足对绝对权力与控制的渴望。这不亚于对二战结束以来建立起来的以规则为基础的国际秩序的一次直接挑战，我们必须现在承诺长期进行这场战斗。', 'US.png', 1);
INSERT INTO `countriesview` VALUES ('中国', '王毅', '中方一贯尊重各国的主权和领土完整，也看到乌克兰问题有其复杂和特殊的历史经纬，强调应彻底摒弃冷战思维，通过对话谈判，最终形成均衡、有效、可持续的欧洲安全机制。', 'China.png', 2);
INSERT INTO `countriesview` VALUES ('德国', '奥拉夫·朔尔茨', '以最强烈的措辞”谴责俄罗斯对乌克兰发动袭击，称“这对乌克兰来说是可怕的一天，对欧洲来说是黑暗的一天。”', 'Germany.png', 3);
INSERT INTO `countriesview` VALUES ('英国', '鲍里斯·约翰逊', '普京总统对乌克兰人民发起行动时，西方不会袖手旁观。', 'UK.png', 4);
INSERT INTO `countriesview` VALUES ('菲律宾', '德尔芬·洛伦扎纳', '菲律宾在俄罗斯乌克兰的军事冲突上保持“中立”立场，并呼吁通过和平方式解决争端', 'fei.png', 5);
INSERT INTO `countriesview` VALUES ('印度', '拉杰库马尔·兰詹· 辛格', '在俄罗斯同乌克兰冲突事件上，印度保持“中立”，并希望可以通过和谈的和平方式来解决。', 'yindu.png', 6);
INSERT INTO `countriesview` VALUES ('日本', '岸田文雄', '俄罗斯“动摇了国际秩序的基础”，日本“将与美国及国际社会合作，迅速作出回应”。', 'Japan.png', 7);

-- ----------------------------
-- Table structure for economics
-- ----------------------------
DROP TABLE IF EXISTS `economics`;
CREATE TABLE `economics`  (
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of economics
-- ----------------------------
INSERT INTO `economics` VALUES (1, '小麦、肥料、重要金属', '俄罗斯和乌克兰的产出以及对外贸易大约仅占全球的2%，俄罗斯的对外直接投资和外国在俄罗斯的直接投资存量也仅仅为全球总额的1%-1.5%，两国在全球金融体系的重要性可以说是十分有限。但必须看到，俄罗斯是世界上最大的小麦出口国，俄乌两国占全球谷物出口量的1/3以上，占世界葵花籽油出口市场的52%。俄罗斯的石油和天然气产量分别约占全球的13%和17%。俄乌还是世界很多重要金属的生产和出口国。', 'ec1_1.png', 'ec1_2.png');
INSERT INTO `economics` VALUES (2, '大宗产品', '自2月下旬冲突发生以来，世界主要大宗产品的价格已出现大幅上升。据经合组织（OECD）统计，与今年1月的平均价格相比，在冲突发生后的头三周（2月24日至3月14日），世界小麦价格上涨了80%，肥料和镍的价格上涨了60%以上，其他重要金属产品的价格涨幅基本上也都超过了20%。与此同时，欧盟的原油和天然气、澳洲的煤的价格也大幅度上涨。', 'ec2_1.png', 'ec2_2.png');
INSERT INTO `economics` VALUES (3, '通货膨胀', '经合组织预计，俄乌冲突将使今年的全球产出增长率比原本该有的水平低1.1个百分点。对美国的影响为0.9个百分点，但对欧元区的影响将达到1.4个百分点。同时，冲突将使全球、欧元区和美国的通胀率分别上升2.5个百分点、2个百分点和1.4个百分点。如果冲突发展成为持久的消耗战或是短时间内显著升级，美国经济有可能陷入衰退甚至滞胀，一些新兴市场经济体和中低收入国家将发生偿债和粮食危机。', 'ec3_1.png', 'ec3_2.png');
INSERT INTO `economics` VALUES (4, '货币', '国际货币体系的基本格局不会发生重大变化，但美国对俄罗斯的金融制裁（特别是限制俄央行动用外汇储备），将削弱美元作为国际货币的可信度，从而对其主导地位产生不利影响。近日，在接受媒体采访时，IMF第一副总裁Gita Gopinath发出警告称，西方对俄罗斯实行的某些制裁，具体说就是冻结或没收俄罗斯央行持有的美元和欧元储备，将使其他外国央行不再愿意持有巨额的美元和欧元。值得注意的是，不久前沙特等产油国表示，将使用人民币作为石油交易的计价和支付货币。这对于推动人民币国际化应该具有非常积极的意义。', 'ec4_1.png', 'ec4_2.png');

-- ----------------------------
-- Table structure for energy
-- ----------------------------
DROP TABLE IF EXISTS `energy`;
CREATE TABLE `energy`  (
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '能源影响' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of energy
-- ----------------------------
INSERT INTO `energy` VALUES (1, '原油', '受俄乌局势影响，俄罗斯石油出口量大跌。2022年2月，随着俄罗斯宣布发起特别军事行动，美国、欧盟和日本等国家对俄罗斯实施经济制裁和能源制裁。3月8日，美国总统乔·拜登签署了一项禁止俄罗斯的石油、液化天然气和煤炭进口到美国的行政命令，并宣布对于俄罗斯新的能源投资行为的禁止，当日WTI期货油价上涨至123.7美元；4月6日，时任英国外交大臣的特拉斯宣布将在2022年底全面停止从俄罗斯进口煤炭和石油，同时尽快结束天然气的进口；4月8日，欧盟首次宣布对于俄罗斯的能源出口的制裁——禁止进口俄罗斯的煤炭和其他固体化石燃料，到6月3日，宣布禁止进口俄罗斯的原油和石油产品，几天后WTI期货油价迎来了继3月8日后的次高点（122.11美元）。', 'en1_0.png', 'en1_1.png', 'en1_2.png');
INSERT INTO `energy` VALUES (2, '天然气', '天然气的价格经历了短期的巨大波动，但后期仍旧保持上升趋势。俄罗斯拥有世界上最大的天然气储量，同时稳定地在全球总产量中贡献17%左右的比例；在如此庞大的体量中，有超过7成的出口流向了欧洲。比起其他国家和地区，欧洲对于俄罗斯天然气出口的依存度相当高，因而造成了天然气价格的高敏感度，“牵一发而动全身”，从这个角度讲，欧洲天然气价格受俄乌冲突以及双方博弈而产生波动是必然的。俄乌冲突升级以后，欧盟“站队”美国，宣布了一系列针对俄罗斯的经济、能源制裁政策，包括禁止进口石油、煤炭等。针对欧盟的“连连出招”，俄罗斯也不甘示弱，从天然气供应入手以应对其猛烈的“攻势”——6月15日，由于西门子能源推迟交付项目所需设备，俄罗斯天然气工业股份公司（Gazprom）宣布将会将“北溪1号”的天然气运输量降至原先的40%左右；7月25日，Gazprom宣布维修另一台引擎，因此“北溪1号”天然气运输量会降低至原先的20%左右；9月15日，Gazprom宣布基于安全因素的考虑，将会彻底关停“北溪1号”，停止输气。因此，6月以后欧洲天然气价格一路走高，尽管8月底有所回调，但随着“北溪1号”的彻底关停，预计未来价格仍旧会回升。', 'en2_0.png', 'en2_1.png', 'en2_2.png');
INSERT INTO `energy` VALUES (3, '煤炭', '俄乌冲突爆发以后，欧洲碳价从2月23日（94.43欧）开始一路暴跌，于3月7号（57.72欧）跌至谷底，随即立马回升，但整体价格相较年初仍处于低位。理论上来说，能源价格上升导致企业排放成本变高，因此碳价和气价是正相关关系。但俄乌冲突导致欧洲天然气价格一路走高的同时，带来了碳价的短期骤降，其背后原因主要是两点：一是受到局势变化和经济下行压力的影响，企业需要出售碳配额增加现金流，以应对生产经营方面可能会面临的问题，而当市场大量抛售碳配额、购买量不及出售量时，碳价的下跌无法避免；二是原材料和能源价格的剧烈增加同样也给企业带来更高的生产成本，市场对于未来经济发展的悲观预期会导致企业降低生产量，从而碳排放减少，碳价下跌。欧盟碳价的迅速回升除了有市场稳定储备机制（Market Stability Reserve, MSR）存在的原因以外，还有能源方面的因素。欧洲天然气价格的上涨在短期内会导致欧洲各国增加煤炭能源使用量，以应对俄罗斯天然气供应中断风险。煤炭使用量的增加会导致更多碳排放，从而碳价上涨。', 'en3_0.png', 'en3_1.png', 'en3_2.png');

-- ----------------------------
-- Table structure for internationalrelation
-- ----------------------------
DROP TABLE IF EXISTS `internationalrelation`;
CREATE TABLE `internationalrelation`  (
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '国际关系影响' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of internationalrelation
-- ----------------------------
INSERT INTO `internationalrelation` VALUES (1, '俄罗斯', '俄罗斯并不像世界认为的经济衰落，底气不足：俄罗斯在俄乌战争开始到现在，所做出的最大变化就是不同于14年俄罗斯吞并克里米亚后，俄乌战争俄罗斯所遭受西方的舆论攻击和金融攻击更强，但是其对外表现明显比14年时更有底气，在国际经济上俄罗斯似乎更衰弱了，但是为什么更有底气，后来我发现：\n\n能源方面，2021年俄罗斯石油产量5.34亿吨，占全球产量12%，同时是第二大石油出口国。2021年，俄罗斯天然气产量约为6390亿立方米，约占全球的六分之一，同时也是世界最大的天然气出口国。矿产方面，俄罗斯主导着钛、钯、氖、镍、铝等关键战略矿产资源，对军工、航天、航空、航海、芯片和电子元器件、汽车制造业等等都有重要影响。粮食方面，俄罗斯是世界第一大小麦出口国。2021年俄罗斯小麦产量在全球占比9.7%、出口量占比16.9%。同时，俄罗斯也是世界上最大氮肥出口国，钾肥出口排在世界第二，也是第三大磷肥出口国。\n除此之外在欧盟的石油、天然气进口当中，俄罗斯来源分别占比约30%、40%。德国对俄罗斯的能源进口依赖度更是显著高于欧盟的总体水平。在宣布制裁措施之后，欧洲天然气价格已经出现大幅上升。\n此外俄罗斯政府负债率仅占国内生产总值17.7%。', 'ir1_1.jpg', 'ir1_2.jpeg', 'ir1_3.jpg');
INSERT INTO `internationalrelation` VALUES (2, '美国', '美国明显力不从心：当俄乌战争开始，美国毅然决然的表示不会派遣美军其态度就是表明欢迎俄罗斯继续打，于此之后所有对俄罗斯的制裁也证明了这个观点：作为真正掀起俄乌战争的幕后黑手，美国却一改常态，没有进行与常任理事国的正面冲突，反而退缩幕后，成为所谓的最大赢家，其实只是自认为没有能力再次加入一场战争。而针对俄罗斯的所有制裁却都没有得到相应的成果，即使使用了所谓的金融核弹其效果也远不如14年对俄制裁之后的效果，要知道14年对俄金融制裁时，卢布可是暴跌40%，当很多人为现在卢布暴跌20%惊叹时，我却只从中间看到了美国的无力，而随后所谓驱逐俄罗斯联合国12名外交官时更佐证了这一点，随后美国表示不会对俄出口至欧洲能源施行制裁，更加证实了我的看法，美国真正开始霸权不再；\n\n长期来看，美国肆意挥霍造成财政赤字大幅扩张、滥用金融制裁，以及欧元等储备货币地位的提升，都会对美元的现有储备货币地位构成挑战。', 'ir2_1.jfif', 'ir2_2.jfif', 'ir2_3.jfif');
INSERT INTO `internationalrelation` VALUES (3, '欧洲', '欧盟内部分裂严重，简直是在表演双重人格，但其内部德法等大国在谋求欧盟在世界上更大的地位：欧盟自俄乌冲突爆发，其法德领导人与乌克兰和俄罗斯多次斡旋，试图阻止战争，而同样的欧盟加盟国波兰等国却一直在寻求欧盟与俄罗斯的对立。甚至直至27日，欧盟才真正开始对俄罗斯实行制裁，而波兰等国连武器都进行了运输，这显然是不合常理的，欧盟作为一个对外的整体，却在俄乌问题表现的如此分裂，没有统一的对外行动，这足以证明欧盟内部出现了大问题！而随后开启乌克兰加入欧盟的进程更是让我看到了，欧盟想在火中取栗，扩大欧盟影响力的决心！', 'ir3_1.jfif', 'ir3_2.jfif', 'ir3_3.jfif');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int(0) DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1675179847);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1675179858);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1675179858);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `name` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '新闻标题',
  `date` datetime(0) NOT NULL COMMENT '发布时间',
  `url` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '链接',
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '新闻表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('渔民与海，波涛中那份情感交织', '2023-10-10 21:00:19', 'https://www.chinanews.com.cn/sh/2023/10-10/10091904.shtml', 1);
INSERT INTO `news` VALUES ('日本启动第二轮排海前准备工作 预计排放约7800吨核污水', '2023-10-03 17:00:00', 'https://www.chinanews.com.cn/gj/2023/10-03/10088605.shtml', 2);
INSERT INTO `news` VALUES ('这地议会通过意见书 要求日本政府中止核污染水排海', '2023-09-20 11:28:48', 'https://www.chinanews.com.cn/gj/2023/09-20/10080892.shtml', 3);
INSERT INTO `news` VALUES ('日本7800吨核污水全部排入海洋 第二批已在路上！', '2023-09-11 13:43:28', 'https://www.chinanews.com.cn/gj/2023/09-11/10075764.shtml', 4);
INSERT INTO `news` VALUES ('日本第二批核污水排海或9月底开始', '2023-09-08 09:52:28', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/09-08/news969603.shtml', 5);
INSERT INTO `news` VALUES ('韩国在野党和市民团体举行大规模集会抗议福岛核污染水排海', '2023-09-02 23:43:26', 'https://www.chinanews.com.cn/gj/2023/09-02/10071355.shtml', 6);
INSERT INTO `news` VALUES ('日政客妄言中国游客入境前要先吃福岛海产', '2023-08-30 14:27:34', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-30/news968793.shtml', 7);
INSERT INTO `news` VALUES ('储量大供应足 我国近九成食盐为井矿盐', '2023-08-29 09:03:04', 'https://www.chinanews.com.cn/cj/2023/08-29/10068698.shtml', 8);
INSERT INTO `news` VALUES ('日本核污染水排海为海洋生态注入不确定性风险', '2023-08-28 01:54:38', 'https://www.chinanews.com.cn/gj/2023/08-28/10068073.shtml', 9);
INSERT INTO `news` VALUES ('韩报社论：凭什么日本排污，他国买单', '2023-08-27 15:39:33', 'https://www.chinanews.com.cn/gj/2023/08-27/10067926.shtml', 10);
INSERT INTO `news` VALUES ('日方提供的信息不可靠！韩国多地举行集会谴责排污入海', '2023-08-26 09:34:37', 'https://www.chinanews.com.cn/gj/2023/08-26/10067498.shtml', 11);
INSERT INTO `news` VALUES ('小新Talkshow：冷静！上次抢的盐还没吃完', '2023-08-26 08:59:11', 'http://www.chinanews.com.cn/shipin/cns/2023/08-26/news968525.shtml', 12);
INSERT INTO `news` VALUES ('日本核污水风波下的中国日料店：多品牌强调在国内进货', '2023-08-25 23:06:29', 'http://www.chinanews.com.cn/shipin/cns/2023/08-25/news968523.shtml', 13);
INSERT INTO `news` VALUES ('日本核污水排海影响吃海鲜吗？专家：要加强监测', '2023-08-25 21:58:40', 'http://www.chinanews.com.cn/shipin/cns/2023/08-25/news968516.shtml', 14);
INSERT INTO `news` VALUES ('中国驻斐济使馆发言人就日本政府启动核污染水排海表态', '2023-08-25 20:59:51', 'https://www.chinanews.com.cn/gn/2023/08-25/10067361.shtml', 15);
INSERT INTO `news` VALUES ('专家谈日本核污排海：部分核素半衰期超千年甚至万年', '2023-08-25 20:27:05', 'https://www.chinanews.com.cn/gn/2023/08-25/10067326.shtml', 16);
INSERT INTO `news` VALUES ('日本东京电力公司公开排放核污染水画面', '2023-08-25 17:08:03', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-25/news968489.shtml', 17);
INSERT INTO `news` VALUES ('核污水会变核污“雨”？日本拟砸数百亿日元公关', '2023-08-25 15:15:44', 'https://www.chinanews.com.cn/gj/2023/08-25/10067097.shtml', 18);
INSERT INTO `news` VALUES ('韩国最大在野党党首狠批政府协助日本“环境犯罪”', '2023-08-25 15:14:32', 'https://www.chinanews.com.cn/gj/2023/08-25/10067073.shtml', 19);
INSERT INTO `news` VALUES ('【成语漫话世界】本末倒置', '2023-08-25 13:46:16', 'https://www.chinanews.com.cn/gj/2023/08-25/10067045.shtml', 20);
INSERT INTO `news` VALUES ('韩媒：日本排污入海预计将对韩国渔业生产造成影响', '2023-08-25 11:12:00', 'https://www.chinanews.com.cn/gj/2023/08-25/10066962.shtml', 21);
INSERT INTO `news` VALUES ('日本排放核污水，我们需要囤盐吗？', '2023-08-25 07:57:48', 'https://www.chinanews.com.cn/sh/2023/08-25/10066877.shtml', 22);
INSERT INTO `news` VALUES ('韩国务总理：若日本核污水排放不合标准 将提起国际诉讼', '2023-08-24 17:44:41', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-24/news968387.shtml', 23);
INSERT INTO `news` VALUES ('海外网评：坐实“全球海洋污染者”，日本必须承担历史责任', '2023-08-24 16:44:50', 'https://www.chinanews.com.cn/ll/2023/08-24/10066568.shtml', 24);
INSERT INTO `news` VALUES ('“请帮帮我们”，韩国海女发声抗议福岛核污染水排海', '2023-08-24 16:34:34', 'https://www.chinanews.com.cn/gj/2023/08-24/10066557.shtml', 25);
INSERT INTO `news` VALUES ('多国反对！日本福岛核污染水排海，不仅是核安全问题！丨世界观', '2023-08-24 14:31:02', 'https://www.chinanews.com.cn/gj/2023/08-24/10066457.shtml', 26);
INSERT INTO `news` VALUES ('国际热评：福岛核污染水排海五大疑问 日本，请回答！', '2023-08-24 14:25:10', 'https://www.chinanews.com.cn/gj/2023/08-24/10066452.shtml', 27);
INSERT INTO `news` VALUES ('福岛核污染水排海引关注 台湾岛内各界表示担心', '2023-08-24 14:08:13', 'https://www.chinanews.com.cn/gn/2023/08-24/10066408.shtml', 28);
INSERT INTO `news` VALUES ('日本核污水排海 韩国再掀囤盐潮', '2023-08-24 13:37:25', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-24/news968358.shtml', 29);
INSERT INTO `news` VALUES ('日本核污水正式排海！中方发声：将切实维护国家利益和人民健康', '2023-08-24 13:05:07', 'https://www.chinanews.com.cn/gsztc/2023/08-24/10066405.shtml', 30);
INSERT INTO `news` VALUES ('韩国务总理：若日本核污水排放不合标准 将提起国际诉讼', '2023-08-24 12:33:17', 'https://www.chinanews.com.cn/gj/2023/08-24/10066399.shtml', 31);
INSERT INTO `news` VALUES ('一图梳理：日本核污水排海计划，五年来经历了什么？', '2023-08-24 12:12:14', 'https://www.chinanews.com.cn/gj/2023/08-24/10066387.shtml', 32);
INSERT INTO `news` VALUES ('开启“潘多拉魔盒”！日本正式开始排放福岛核污染水', '2023-08-24 12:06:13', 'https://www.chinanews.com.cn/gj/2023/08-24/10066383.shtml', 33);
INSERT INTO `news` VALUES ('日本核污水排海是为一己之私损天下', '2023-08-24 06:43:13', 'https://www.chinanews.com.cn/sh/2023/08-24/10066221.shtml', 34);
INSERT INTO `news` VALUES ('日本东电公布首批核污水排放计划 17天内或将排放7800吨', '2023-08-23 16:36:23', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-23/news968269.shtml', 35);
INSERT INTO `news` VALUES ('为粉饰排污入海恶行，日本政府做过哪些“神操作”？', '2023-08-23 14:06:14', 'https://www.chinanews.com.cn/gj/2023/08-23/10065843.shtml', 36);
INSERT INTO `news` VALUES ('【国际锐评】执意启动排污入海 日本信用彻底破产', '2023-08-23 10:51:41', 'https://www.chinanews.com.cn/gj/2023/08-23/10065745.shtml', 37);
INSERT INTO `news` VALUES ('后天来了！日本核污染水24日开始排海，进口海鲜还能吃吗？', '2023-08-23 08:53:14', 'https://www.chinanews.com.cn/gsztc/2023/08-23/10065671.shtml', 38);
INSERT INTO `news` VALUES ('强推核污染水排海，日政客不仁不义', '2023-08-23 06:27:37', 'https://www.chinanews.com.cn/sh/2023/08-23/10065622.shtml', 39);
INSERT INTO `news` VALUES ('韩国民众在日本驻韩国大使馆外抗议核污染水排海', '2023-08-22 19:27:20', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-22/news968193.shtml', 40);
INSERT INTO `news` VALUES ('24日起日本核污水正式排海！进口海鲜还能吃吗？', '2023-08-22 14:58:16', 'http://www.chinanews.com.cn/gj/shipin/2023/08-22/news968157.shtml', 41);
INSERT INTO `news` VALUES ('“不可接受！”日本民众在首相官邸外抗议核污水排海', '2023-08-22 14:57:08', 'https://www.chinanews.com.cn/gj/2023/08-22/10065207.shtml', 42);
INSERT INTO `news` VALUES ('日本政府宣布8月24日启动福岛核污水排海', '2023-08-22 12:14:25', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-22/news968137.shtml', 43);
INSERT INTO `news` VALUES ('定了！日本政府宣布8月24日启动福岛核污水排海', '2023-08-22 09:47:39', 'https://www.chinanews.com.cn/gj/2023/08-22/10065020.shtml', 44);
INSERT INTO `news` VALUES ('定了？日本首相：福岛核污水最早8月24日排海', '2023-08-21 18:51:00', 'https://www.chinanews.com.cn/gj/2023/08-21/10064776.shtml', 45);
INSERT INTO `news` VALUES ('民调：近九成日本人担忧核污水排海使日本“形象受损”', '2023-08-21 10:50:48', 'https://www.chinanews.com.cn/gj/2023/08-21/10064533.shtml', 46);
INSERT INTO `news` VALUES ('岸田文雄视察福岛核电站 已进入敲定核污染水排海“最后阶段”', '2023-08-20 16:24:35', 'https://www.chinanews.com.cn/gj/2023/08-20/10064279.shtml', 47);
INSERT INTO `news` VALUES ('国际识局：美日韩搞“小圈子” 戴维营峰会危及东亚地区稳定', '2023-08-18 08:20:50', 'https://www.chinanews.com.cn/gj/2023/08-18/10063094.shtml', 48);
INSERT INTO `news` VALUES ('韩国渔民连续集会抗议日本核污染水排海', '2023-08-16 21:45:07', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/08-16/news967665.shtml', 49);
INSERT INTO `news` VALUES ('韩国渔民集会抗议：“大海不是投放日本核污染水的垃圾桶！”', '2023-08-16 20:45:51', 'https://www.chinanews.com.cn/gj/2023/08-16/10062371.shtml', 50);
INSERT INTO `news` VALUES ('韩日涉福岛核污水排海司局级磋商16日在线举行', '2023-08-16 15:04:26', 'https://www.chinanews.com.cn/gj/2023/08-16/10062101.shtml', 51);
INSERT INTO `news` VALUES ('世界周刊丨神奈川之“惑”', '2023-08-14 15:27:46', 'https://www.chinanews.com.cn/gj/2023/08-14/10060919.shtml', 52);
INSERT INTO `news` VALUES ('文过饰非，消除不了核污染水排海之害', '2023-08-11 14:38:23', 'https://www.chinanews.com.cn/gj/2023/08-11/10059612.shtml', 53);
INSERT INTO `news` VALUES ('文过饰非，消除不了核污染水排海之害(钟声)', '2023-08-11 05:56:32', 'https://www.chinanews.com.cn/gj/2023/08-11/10059375.shtml', 54);
INSERT INTO `news` VALUES ('抗议排放核污水！国际黑客组织攻击日本核能团体', '2023-08-10 16:21:05', 'https://www.chinanews.com.cn/gj/2023/08-10/10058991.shtml', 55);
INSERT INTO `news` VALUES ('韩媒社论：勿让韩美日峰会成为核污水排海正当化的舞台', '2023-08-10 13:55:56', 'https://www.chinanews.com.cn/gj/2023/08-10/10058819.shtml', 56);
INSERT INTO `news` VALUES ('韩在野党将向联合国人权理事会提交请愿书 反对核污水排海', '2023-08-10 09:45:02', 'https://www.chinanews.com.cn/gj/2023/08-10/10058749.shtml', 57);
INSERT INTO `news` VALUES ('韩国渔民集会抗议日本核污染水排海', '2023-07-26 22:15:56', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/07-26/news965701.shtml', 58);
INSERT INTO `news` VALUES ('砸钱洗白核污水纯属自曝其丑', '2023-07-26 04:48:22', 'https://www.chinanews.com.cn/gj/2023/07-26/10049710.shtml', 59);
INSERT INTO `news` VALUES ('不得民心！福岛居民忧核污水排海有损声誉 影响生计', '2023-07-25 17:03:50', 'https://www.chinanews.com.cn/gj/2023/07-25/10049403.shtml', 60);
INSERT INTO `news` VALUES ('为免国民担忧 韩国政府将对福岛等地压舱水层层把关', '2023-07-21 16:29:31', 'https://www.chinanews.com.cn/gj/2023/07-21/10047402.shtml', 61);
INSERT INTO `news` VALUES ('人民网三评“福岛核污染水处理”之二：“排污入海”计划岂能漂白', '2023-07-19 21:39:31', 'https://www.chinanews.com.cn/gj/2023/07-19/10046299.shtml', 62);
INSERT INTO `news` VALUES ('日本八成民众认为政府对核污水排海说明不充分', '2023-07-17 17:32:16', 'https://www.chinanews.com.cn/gj/2023/07-17/10044573.shtml', 63);
INSERT INTO `news` VALUES ('日媒：八成受访者称日政府对福岛核污染水排海说明不充分', '2023-07-17 11:11:12', 'https://www.chinanews.com.cn/gj/2023/07-17/10044272.shtml', 64);
INSERT INTO `news` VALUES ('多方认为：日本核污染水排海不正当、不合法、不安全', '2023-07-17 05:32:15', 'https://www.chinanews.com.cn/gj/2023/07-17/10044189.shtml', 65);
INSERT INTO `news` VALUES ('关于福岛核污染水排海时间，日本首相最新表态', '2023-07-13 16:10:25', 'https://www.chinanews.com.cn/gj/2023/07-13/10042258.shtml', 66);
INSERT INTO `news` VALUES ('李家超：若日本排放核污染水 香港将扩大对日海产品进口限制', '2023-07-13 13:22:15', 'http://www.chinanews.com.cn/ga/shipin/cns-d/2023/07-13/news964573.shtml', 67);
INSERT INTO `news` VALUES ('韩媒质疑国际原子能机构评估报告：发布过程缺乏科学性 形同走过场', '2023-07-12 23:29:41', 'https://www.chinanews.com.cn/gj/2023/07-12/10041889.shtml', 68);
INSERT INTO `news` VALUES ('日媒社论：日本政府强排核污水 完全忘记福岛的惨痛教训', '2023-07-11 21:22:45', 'https://www.chinanews.com.cn/gj/2023/07-11/10040986.shtml', 69);
INSERT INTO `news` VALUES ('【世界说】港媒：脆弱的海洋不应成为日本福岛核污染水的倾倒场', '2023-07-11 21:19:55', 'https://www.chinanews.com.cn/gj/2023/07-11/10040984.shtml', 70);
INSERT INTO `news` VALUES ('李家超：若日本排放核水将扩大海产品进口限制', '2023-07-11 15:49:02', 'https://www.chinanews.com.cn/gn/2023/07-11/10040709.shtml', 71);
INSERT INTO `news` VALUES ('李家超：若日本排放核污水 香港将扩大对日海产品进口限制', '2023-07-11 15:24:48', 'https://www.chinanews.com.cn/dwq/2023/07-11/10040689.shtml', 72);
INSERT INTO `news` VALUES ('韩国多名专家发声：国际原子能机构评估报告缺乏科学性 反对核污水排海', '2023-07-10 22:28:30', 'https://www.chinanews.com.cn/gj/2023/07-10/10040356.shtml', 73);
INSERT INTO `news` VALUES ('日本强推排污入海 在京民众怎么看？', '2023-07-10 20:22:47', 'http://www.chinanews.com.cn/gj/shipin/cns/2023/07-10/news964258.shtml', 74);
INSERT INTO `news` VALUES ('日媒预计：日本政府很可能在8月中旬开始福岛核污水排海', '2023-07-08 19:34:52', 'https://www.chinanews.com.cn/gj/2023/07-08/10039256.shtml', 75);
INSERT INTO `news` VALUES ('国际锐评丨执意推进核污水排海的日方将被钉上历史的耻辱柱！', '2023-07-08 15:52:42', 'https://www.chinanews.com.cn/gj/2023/07-08/10039107.shtml', 76);
INSERT INTO `news` VALUES ('一份报告背不动日本核污水排海这口“锅”', '2023-07-08 05:28:49', 'https://www.chinanews.com.cn/gj/2023/07-08/10038940.shtml', 77);
INSERT INTO `news` VALUES ('（国际观察）日本排污入海是没有先例的冒险  并非“最优解”', '2023-07-07 18:20:45', 'https://www.chinanews.com.cn/gj/2023/07-07/10038704.shtml', 78);
INSERT INTO `news` VALUES ('中国专家：IAEA发布报告并不代表机构核可或批准日方核污水排海', '2023-07-06 17:16:12', 'https://www.chinanews.com.cn/gn/2023/07-06/10037998.shtml', 79);
INSERT INTO `news` VALUES ('日本核污染水排海，背后的账该怎么算？', '2023-07-06 09:08:15', 'https://www.chinanews.com.cn/gsztc/2023/07-06/10037612.shtml', 80);
INSERT INTO `news` VALUES ('日本欲借不全面报告推进核污染水排海计划引多方质疑', '2023-07-05 16:50:12', 'https://www.chinanews.com.cn/gj/2023/07-05/10037252.shtml', 81);
INSERT INTO `news` VALUES ('中新国际观察｜日本强推排污入海——因小失大，贻害无穷', '2023-07-05 16:34:59', 'https://www.chinanews.com.cn/gj/2023/07-05/10037204.shtml', 82);
INSERT INTO `news` VALUES ('韩国最大在野党：IAEA评估报告未验证福岛核污水安全性', '2023-07-05 08:57:08', 'https://www.chinanews.com.cn/gj/2023/07-05/10036887.shtml', 83);
INSERT INTO `news` VALUES ('日本渔协等将再提交3万多份签名 反对福岛核污水排海', '2023-07-05 07:50:50', 'https://www.chinanews.com.cn/gj/2023/07-05/10036877.shtml', 84);
INSERT INTO `news` VALUES ('香港研究发现“人工青口”可用于监测海水中放射物含量', '2023-07-04 21:44:03', 'https://www.chinanews.com.cn/dwq/2023/07-04/10036736.shtml', 85);
INSERT INTO `news` VALUES ('中国驻柬埔寨大使就日本福岛核污染水排海问题阐明中方立场', '2023-07-04 21:32:37', 'https://www.chinanews.com.cn/gn/2023/07-04/10036772.shtml', 86);
INSERT INTO `news` VALUES ('韩方：不会对福岛水产品进口禁令设定期限', '2023-07-04 10:34:37', 'https://www.chinanews.com.cn/gj/2023/07-04/10036318.shtml', 87);
INSERT INTO `news` VALUES ('日本核污水排海对韩国影响日益扩大 日韩关系或再蒙阴影', '2023-07-03 20:02:32', 'https://www.chinanews.com.cn/gj/2023/07-03/10036099.shtml', 88);
INSERT INTO `news` VALUES ('日本政府：2023年夏季排放福岛核污水的计划不变', '2023-07-03 15:10:48', 'https://www.chinanews.com.cn/gj/2023/07-03/10035870.shtml', 89);
INSERT INTO `news` VALUES ('中国驻东盟使团发言人关于日本强推福岛核污染水排海事答记者问', '2023-07-03 13:54:51', 'https://www.chinanews.com.cn/gj/2023/07-03/10035813.shtml', 90);
INSERT INTO `news` VALUES ('韩国最大在野党举行集会反对日本核污水排海', '2023-07-02 20:29:58', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/07-02/news963529.shtml', 91);
INSERT INTO `news` VALUES ('新漫评：海洋不是日本的“下水道”，更不是试验场', '2023-07-02 16:02:39', 'http://www.chinanews.com.cn/gj/2023/07-02/10035453.shtml', 92);
INSERT INTO `news` VALUES ('韩国最大在野党举行集会反对日本核污水排海', '2023-07-02 10:28:36', 'https://www.chinanews.com.cn/gj/2023/07-02/10035346.shtml', 93);
INSERT INTO `news` VALUES ('日媒：日本东京电力公司核污水排放设备面向媒体公开', '2023-06-28 16:02:58', 'https://www.chinanews.com.cn/gj/2023/06-28/10032980.shtml', 94);
INSERT INTO `news` VALUES ('关于福岛核污水排放日期，日方最新表态', '2023-06-27 16:49:32', 'https://www.chinanews.com.cn/gj/2023/06-27/10032302.shtml', 95);
INSERT INTO `news` VALUES ('让公众参观福岛核电站，东电盘算什么', '2023-06-27 11:24:24', 'https://www.chinanews.com.cn/gj/2023/06-27/10032114.shtml', 96);
INSERT INTO `news` VALUES ('福岛核排污最新进展：排污海底隧道已基本完工', '2023-06-26 20:35:58', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/06-26/news962951.shtml', 97);
INSERT INTO `news` VALUES ('东西问丨刘光源：日本福岛核污染水排海，全球将如何应对？', '2023-06-26 20:00:48', 'https://www.chinanews.com.cn/gj/2023/06-26/10031796.shtml', 98);
INSERT INTO `news` VALUES ('福岛核排污最新进展：排污海底隧道已基本完工', '2023-06-26 15:02:09', 'https://www.chinanews.com.cn/gj/2023/06-26/10031584.shtml', 99);
INSERT INTO `news` VALUES ('核污染水排海是危害人类的“冒险赌博”', '2023-06-26 10:27:56', 'https://www.chinanews.com.cn/gj/2023/06-26/10031389.shtml', 100);

-- ----------------------------
-- Table structure for ourteammems
-- ----------------------------
DROP TABLE IF EXISTS `ourteammems`;
CREATE TABLE `ourteammems`  (
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '成员姓名',
  `id` int(0) NOT NULL COMMENT '学号',
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '专业',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '团队成员表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ourteammems
-- ----------------------------
INSERT INTO `ourteammems` VALUES ('韩佳迅', 2012682, 1, '计算机科学与技术');
INSERT INTO `ourteammems` VALUES ('姚鑫', 2014089, 2, '信息安全');
INSERT INTO `ourteammems` VALUES ('彭钰婷', 2013631, 3, '计算机科学与技术');
INSERT INTO `ourteammems` VALUES ('林语盈', 2012174, 4, '计算机科学与技术');

-- ----------------------------
-- Table structure for personhomework
-- ----------------------------
DROP TABLE IF EXISTS `personhomework`;
CREATE TABLE `personhomework`  (
  `num_id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名字',
  `hw1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业1',
  `hw2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业2',
  `hw3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业3',
  `github` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'GitHub链接',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '个人作业' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personhomework
-- ----------------------------
INSERT INTO `personhomework` VALUES (1, '韩佳迅', '作业1(2012682_韩佳迅).zip', '作业2(2012682_韩佳迅).zip', '作业3(2012682_韩佳迅).zip', 'https://github.com/hanmaxmax');
INSERT INTO `personhomework` VALUES (2, '林语盈', '作业1(2012174_林语盈).zip', '作业2(2012174_林语盈).zip', '作业3(2012174_林语盈).zip', 'https://github.com/AldebaranL');
INSERT INTO `personhomework` VALUES (3, '彭钰婷', '作业1(2013631_彭钰婷).zip', '作业2(2013631_彭钰婷).zip', '作业3(2013631_彭钰婷).zip', 'https://github.com/tttran67');
INSERT INTO `personhomework` VALUES (4, '姚鑫', '作业1(2014089_姚鑫).zip', '作业2(2014089_姚鑫).zip', '作业3(2014089_姚鑫).zip', 'https://github.com/yx66667');

-- ----------------------------
-- Table structure for tb_user_authority
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_authority`;
CREATE TABLE `tb_user_authority`  (
  `tb_uaId` int unsigned NOT NULL COMMENT '权限编号',
  `tb_uaRemark` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '权限说明',
  `tb_uaIsmanager` tinyint(1) DEFAULT NULL COMMENT '是否为管理员',
  PRIMARY KEY (`tb_uaId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户权限表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user_authority
-- ----------------------------
INSERT INTO `tb_user_authority` VALUES (1, '管理员权限', 1);
INSERT INTO `tb_user_authority` VALUES (2, '用户权限', 0);
INSERT INTO `tb_user_authority` VALUES (3, '游客权限', 0);

-- ----------------------------
-- Table structure for teamhomework
-- ----------------------------
DROP TABLE IF EXISTS `teamhomework`;
CREATE TABLE `teamhomework`  (
  `num_id` int(0) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业名称',
  `position` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '文件名称',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '团队作业' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teamhomework
-- ----------------------------
INSERT INTO `teamhomework` VALUES (1, '需求文档', 'NKU-HLPY_需求文档(2012682_2012174_2013631_2014089).pdf');
INSERT INTO `teamhomework` VALUES (2, '设计文档', 'NKU-HLPY_设计文档(2012682_2012174_2013631_2014089).pdf');
INSERT INTO `teamhomework` VALUES (3, '实现文档', 'NKU-HLPY_实现文档(2012682_2012174_2013631_2014089).pdf');
INSERT INTO `teamhomework` VALUES (4, '用户手册', 'NKU-HLPY_用户手册(2012682_2012174_2013631_2014089).pdf');
INSERT INTO `teamhomework` VALUES (5, '部署文档', 'NKU-HLPY_部署文档(2012682_2012174_2013631_2014089).pdf');
INSERT INTO `teamhomework` VALUES (6, '项目展示PPT', 'NKU-HLPY_项目展示PPT(2012682_2012174_2013631_2014089).pptx');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` smallint(0) NOT NULL DEFAULT 10,
  `created_at` int(0) NOT NULL,
  `updated_at` int(0) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (0, 'admin', 'nS7srBBk1qUOQvaYtVif494hdoTNSkAc', '$2y$13$xqJevlMBmqqPRVFcHwRTq.CKqqidNNNnHnVnJ4GAz0pEicKnBT2VS', NULL, '', 10, 0, 0, NULL);
INSERT INTO `user` VALUES (2, 'HJX', 'JHOVeSkgBIUrCDP6s6oMuZioOraVC6oW', '$2y$13$LyXh2Ag20CMAToYvMbxXy.l7A4.UfzWyxu2cRPzmc.BgCIfy217Ru', NULL, 'hanmaxmax@163.com', 10, 1675180289, 1675180289, 'ojy6pdUihe5v2G-Lr3lpnCb5N7SKZiG9_1675180289');
INSERT INTO `user` VALUES (3, 'hello', '6E61iBpyVwPb1BYTjo21HsDyv8GCFkWo', '$2y$13$6NEbgA3Iv5H88htftZXB5OP1GNhHnJNJVVqqMA72YOkzoWE5/VjRS', NULL, '123@qq.com', 10, 1675784951, 1675784951, 'gEiMD7TS1cNx9Q0TAvC9JJiWfsXxj0m4_1675784951');
INSERT INTO `user` VALUES (4, 'YX', 'owznswEHad09Lc2dhsnEwAYTwuL4_9yR', '$2y$13$hPLslxJLLnzaFzZiNMQcsuHjCwSG/p8xb.9IJWQTflSHMY7IYl6V.', NULL, '456@qq.com', 10, 1675785947, 1675785947, 'PFBTxKziX0bu1NRHoOI_7NeVMKs0zj1s_1675785947');
INSERT INTO `user` VALUES (5, 'Aurora', 'X-m65Zi61sUTfz8bNkHIBRBSKBjU5tgt', '$2y$13$8lzbGkvUXA37Mr7Vw0l5AOTgjeHzx/8iIwu8KNgWBWqqno/soiLiO', NULL, '798@qq.com', 10, 1675786150, 1675786150, 'UDITtoPOorVKPC-34NpO7pTE6A71Tb6i_1675786150');
INSERT INTO `user` VALUES (6, 'LYY', 'ZlK91IQWW3KA5D3PlydhqW5q-LtfHJs7', '$2y$13$vzFye851AQ71Uztij.rUmO/THXIJNiS8Ck22QsbimYzHpiVvH2cta', NULL, '111@qq.com', 9, 1675866867, 1675866867, 'cvG5MPe3vE1TplyOHCK_jWKac_GdVxTR_1675866867');

SET FOREIGN_KEY_CHECKS = 1;
