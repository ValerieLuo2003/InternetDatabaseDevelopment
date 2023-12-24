/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 80035 (8.0.35)
 Source Host           : localhost:3306
 Source Schema         : yii2advanced

 Target Server Type    : MySQL
 Target Server Version : 80035 (8.0.35)
 File Encoding         : 65001

 Date: 24/12/2023 13:14:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for casestudy
-- ----------------------------
DROP TABLE IF EXISTS `casestudy`;
CREATE TABLE `casestudy`  (
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '国家',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '人名',
  `casecontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '观点',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片',
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of casestudy
-- ----------------------------
INSERT INTO `casestudy` VALUES ('苏联', '切尔诺贝利核事故', '1986年，位于苏联（现乌克兰）的切尔诺贝利核电站4号反应堆发生严重事故。\n大规模的辐射泄漏影响了欧洲多个国家，导致数千人患癌症，影响了大片土地的农业和生态系统。', 'sulian.jpg', 1);
INSERT INTO `casestudy` VALUES ('日本', '福岛核事故', '2011年，日本东北地区发生了9.0级地震和海啸，导致福岛第一核电站发生核泄漏。\n事故导致周边地区的疏散，对水域和食品链的影响，以及对日本能源政策的深远影响。', 'Japan.png', 2);
INSERT INTO `casestudy` VALUES ('美国', '哈里斯堡核事故', '1979年，美国宾夕法尼亚州的三里岛核电站2号反应堆发生部分熔融事故。\n虽然没有造成人员死亡，但事故引发了对核安全的广泛关注，影响了美国的核能发展。', 'US.png', 3);
INSERT INTO `casestudy` VALUES ('法国', '马约尔岛核试验', '1979年，法国在南太平洋的马约尔岛进行了一系列核试验，导致了广泛的环境和健康问题。\n当地居民报告患有各种疾病，而岛屿上的生态系统也受到了严重影响。\n这些案例突显了核事故对人类健康、生态系统和社会的多方面影响，强调了核能事故的严重性以及对核安全的重要性。', 'France.jpg', 4);

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL COMMENT '用户id',
  `content` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '内容',
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT '用户名',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1, 1, '日本政府计划通过将福岛核电站事故后产生的被污染水进行处理，然后将其排放到太平洋中。他们主张这种处理方式是安全的，并且已经经过详细研究和评估。', '日本政府');
INSERT INTO `comment` VALUES (2, 7, '中国政府一直强调日本核污染水排海是一项不负责任的行动，会对海洋生态和人类健康造成严重危害。中国政府一直呼吁各国加强环保意识，共同保护地球环境。', '中国政府');
INSERT INTO `comment` VALUES (3, 2, '许多环保组织和反核团体反对将核污水排放到海洋中，认为这可能对海洋生态系统和沿海社区造成潜在风险。他们主张寻找其他替代方案，例如将水贮存在容器中，以允许更多的时间进行安全处理。', '环保组织和反核团体');
INSERT INTO `comment` VALUES (4, 3, '许多环保组织和反核团体反对将核污水排放到海洋中，认为这可能对海洋生态系统和沿海社区造成潜在风险。他们主张寻找其他替代方案，例如将水贮存在容器中，以允许更多的时间进行安全处理。', '国际原子能机构（IAEA）');
INSERT INTO `comment` VALUES (5, 4, '渔业和沿海社区的居民可能担心核污水排放会对他们的生计和健康产生不良影响。一些渔业团体可能会反对这一做法，担忧其对海产品销售的负面影响。', '渔业和沿海居民');
INSERT INTO `comment` VALUES (6, 5, '一些国家和国际组织对日本的决定表示关切，强调需要透明度和国际合作。邻近国家和地区可能特别担心潜在的跨境影响，并呼吁进行国际协商。', '国际社会');
INSERT INTO `comment` VALUES (7, 6, '将核污染水排海可能会对海洋生态和人类健康造成严重危害，这种行为是不负责任和不道德的。日本政府应该采取更有效的措施来处理核污染水，例如将其进行无害化处理或将其长期储存在安全的地方。', '某俄罗斯网友');
INSERT INTO `comment` VALUES (8, 6, '核污染水排海对海洋生态和人类健康的影响是长期和潜在的，很难准确预测其后果。应该尊重国际社会和科学界的意见，采取科学和客观的方法来处理核污染水。', '某俄罗斯网友');

-- ----------------------------
-- Table structure for ecological
-- ----------------------------
DROP TABLE IF EXISTS `ecological`;
CREATE TABLE `ecological`  (
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '能源影响' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ecological
-- ----------------------------
INSERT INTO `ecological` VALUES (1, '海洋生态系统受损', '日本排放核污水对海洋生态系统造成了严重威胁。排放中包含的放射性物质和化学物质可能引起海洋生物的毒性影响，影响水生植物和动物的健康。这不仅对海洋生态链的平衡产生负面影响，还可能导致渔业资源减少，威胁渔业的可持续性。海洋生态系统的遭受损害还会影响沿海社区的经济活动和文化传承。', 'ene1_1.png', 'ene1_2.png', 'ene1_3.png');
INSERT INTO `ecological` VALUES (2, '陆地生态系统破坏', '污水排放不仅对海洋有害，还对附近的陆地生态系统产生直接和间接的影响。放射性物质可能通过沉积到土壤中，影响植物生长和土地的肥沃性。这可能导致农业产品受到污染，对当地农业和生态系统产生长期影响。生态系统的破坏还可能引发生态系统服务的丧失，如水质净化和自然防灾功能的削弱。', 'ene2_1.png', 'ene2_2.png', 'ene2_3.png');
INSERT INTO `ecological` VALUES (3, '影响生物多样性', '污水排放可能对周围地区的生物多样性造成负面影响。辐射物质的释放可能导致一些物种的死亡或迁徙，破坏生态平衡。生物多样性的下降不仅威胁当地物种的存续，还可能影响全球生态系统的稳定性。长期来看，这种影响可能导致某些物种的灭绝，进而影响整个生态系统的结构和功能。', 'ene3_1.png', 'ene3_2.png', 'ene3_3.png');

-- ----------------------------
-- Table structure for economics
-- ----------------------------
DROP TABLE IF EXISTS `economics`;
CREATE TABLE `economics`  (
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of economics
-- ----------------------------
INSERT INTO `economics` VALUES (1, '渔业和水产品出口', '核污水排放对渔业和水产品出口带来的直接经济冲击主要表现在海产品市场的疲软。国际社会对辐射水产品的担忧可能导致日本海产品的需求锐减，尤其是对海鲜产品的需求下降明显。渔民和水产养殖者可能面临销售难题，致使收入减少。此外，由于水产品供应链的中断，渔业相关企业和当地社区的经济活动也将受到牵连效应的影响。', 'eco1_1.jpg', 'eco1_2.jpg');
INSERT INTO `economics` VALUES (2, '旅游业和服务行业', '核污水排放可能引发国际游客减少，影响日本旅游业和服务行业的盈利。外国游客的减少将直接影响酒店、餐饮、零售和导游等服务业的业务。由于游客支出的减少，服务业企业可能面临收入下降，增加失业率，尤其是在以旅游为主导的地区，经济衰退的风险将进一步加大。', 'eco2_1.jpg', 'eco2_2.png');
INSERT INTO `economics` VALUES (3, '食品产业和消费信心', '核污水排放可能引发对海产品和农产品的消费信心下降。消费者可能对来自受影响地区的食品表现出疑虑，导致海产品市场需求减少。食品产业可能面临销售下滑，企业的生产和供应链可能受到严重影响。政府和企业需要采取有效措施，加强食品安全监管，以维护消费者信心并恢复市场活力。', 'eco3_1.jpg', 'eco3_2.jpg');
INSERT INTO `economics` VALUES (4, '国际投资和贸易', '核污水排放可能引发国际投资者对日本的担忧，影响国际贸易关系。外部投资可能减少，新的商业项目和合作计划可能受到推迟或取消。此外，与邻国的贸易关系可能因为核污水问题而受到扰动，对日本的经济增长和产业发展带来潜在威胁。政府需要通过积极的外交和经济政策，维护国际合作关系，减轻潜在的经济影响。', 'eco4_1.jpg', 'eco4_2.jpg');

-- ----------------------------
-- Table structure for internationalrelation
-- ----------------------------
DROP TABLE IF EXISTS `internationalrelation`;
CREATE TABLE `internationalrelation`  (
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '国际关系影响' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of internationalrelation
-- ----------------------------
INSERT INTO `internationalrelation` VALUES (1, '中朝辐射安全问题', '朝鲜的核试验引发了国际社会的关切，特别是其邻国中国。辐射污染可能波及到中国边境地区，对环境和人民健康构成潜在威胁。这种威胁使中朝两国之间的关系更加复杂。中国不仅需要应对自身国内的核安全问题，还需与朝鲜合作以防范可能的辐射扩散。\n\n中朝之间的合作努力和紧张关系将受到核安全问题的直接影响。一方面，中国可能通过技术支持和信息分享来帮助朝鲜改善其核设施的安全性，以减少辐射风险。另一方面，中国也需要采取措施来保护自身的国土和人民，这可能包括设立边境防护区、提升辐射监测和采取医疗防护措施。', 'an1-1.jpg', 'an1-2.jpg', 'an1-3.jpg');
INSERT INTO `internationalrelation` VALUES (2, '俄美核裁军协议的挑战', '俄美之间的紧张关系影响到核裁军努力的前景。双方之间的争端可能导致协议的破裂，增加核武器的数量，甚至采取更具侵略性的军事姿态。这种情况将对全球的国际关系格局产生直接的负面影响，加剧现有的地缘政治紧张局势。', 'ew2-1.jpg', 'ew2-2.jpg', 'ew2-3.jpg');
INSERT INTO `internationalrelation` VALUES (3, '国际合作解决核废料问题', '欧洲作为一个共享核能资源的地区，面临着跨国核废料管理的复杂挑战。各国需要共同努力，以确保核废料的安全处理和储存。这种合作不仅涉及技术层面，还包括政治和经济层面。欧洲联盟成员国之间的合作是解决这一问题的关键。通过分享最佳实践、共同投资于新技术和建立共同的管理框架，欧洲国家可以更好地应对核废料管理的挑战。在能源转型的时代，强调可再生能源和核能在能源结构中的比例，突显了寻找清洁、可持续的能源解决方案的重要性。', 'fl3-1.jpg', 'fl3-2.jpg', 'fl3-3.jpg');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

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
  `date` datetime NOT NULL COMMENT '发布时间',
  `url` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '链接',
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '新闻表' ROW_FORMAT = DYNAMIC;

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
  `id` int NOT NULL COMMENT '学号',
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '专业',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '团队成员表' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ourteammems
-- ----------------------------
INSERT INTO `ourteammems` VALUES ('罗梓洋', 2112957, 1, '密码科学与技术');
INSERT INTO `ourteammems` VALUES ('李晓彤', 2112075, 2, '信息安全');
INSERT INTO `ourteammems` VALUES ('姜涵', 2113630, 3, '信息安全');
INSERT INTO `ourteammems` VALUES ('师雅卉', 2111224, 4, '密码科学与技术');

-- ----------------------------
-- Table structure for personhomework
-- ----------------------------
DROP TABLE IF EXISTS `personhomework`;
CREATE TABLE `personhomework`  (
  `num_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名字',
  `hw1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业1',
  `hw2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业2',
  `hw3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业3',
  `github` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'GitHub链接',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '个人作业' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personhomework
-- ----------------------------
INSERT INTO `personhomework` VALUES (1, '罗梓洋', '作业1（2112957_罗梓洋）.zip', '作业2（2112957_罗梓洋）.zip', '作业3（2112957_罗梓洋）.zip', 'https://github.com/ValerieLuo2003');
INSERT INTO `personhomework` VALUES (2, '李晓彤', '作业1（2112075_李晓彤）.zip', '作业2（2112075_李晓彤）.zip', '作业3（2112075_李晓彤）.zip', 'https://github.com/enertiy/Internet-database-development/tree/main');
INSERT INTO `personhomework` VALUES (3, '姜涵', '作业1（2113630_姜涵）.zip', '作业2（2113630_姜涵）.zip', '作业3（2113630_姜涵）.zip', 'https://github.com/tttran67');
INSERT INTO `personhomework` VALUES (4, '师雅卉', '作业1（2111224_师雅卉）.zip', '作业2（2111224_师雅卉）.zip', '作业3（2111224_师雅卉）.zip', 'https://github.com/aurora-er/Internet-datebase');

-- ----------------------------
-- Table structure for tb_user_authority
-- ----------------------------
DROP TABLE IF EXISTS `tb_user_authority`;
CREATE TABLE `tb_user_authority`  (
  `tb_uaId` int UNSIGNED NOT NULL COMMENT '权限编号',
  `tb_uaRemark` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '权限说明',
  `tb_uaIsmanager` tinyint(1) NULL DEFAULT NULL COMMENT '是否为管理员',
  PRIMARY KEY (`tb_uaId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户权限表' ROW_FORMAT = DYNAMIC;

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
  `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业名称',
  `position` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '文件名称',
  PRIMARY KEY (`num_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '团队作业' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of teamhomework
-- ----------------------------
INSERT INTO `teamhomework` VALUES (1, '需求文档', 'NKU-不想重装_需求文档（2112957_2112075_2113630_2111224）.pdf');
INSERT INTO `teamhomework` VALUES (2, '设计文档', 'NKU-不想重装_设计文档（2112957_2112075_2113630_2111224）.pdf');
INSERT INTO `teamhomework` VALUES (3, '实现文档', 'NKU-不想重装_实现文档（2112957_2112075_2113630_2111224）.pdf');
INSERT INTO `teamhomework` VALUES (4, '用户手册', 'NKU-不想重装_用户手册（2112957_2112075_2113630_2111224）.pdf');
INSERT INTO `teamhomework` VALUES (5, '部署文档', 'NKU-不想重装_部署文档（2112957_2112075_2113630_2111224）.pdf');
INSERT INTO `teamhomework` VALUES (6, '项目展示PPT', 'NKU-不想重装_项目展示PPT（2112957_2112075_2113630_2111224）.pptx');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (2, 'HJX', 'JHOVeSkgBIUrCDP6s6oMuZioOraVC6oW', '$2y$13$LyXh2Ag20CMAToYvMbxXy.l7A4.UfzWyxu2cRPzmc.BgCIfy217Ru', NULL, 'hanmaxmax@163.com', 10, 1675180289, 1675180289, 'ojy6pdUihe5v2G-Lr3lpnCb5N7SKZiG9_1675180289');
INSERT INTO `user` VALUES (3, 'hello', '6E61iBpyVwPb1BYTjo21HsDyv8GCFkWo', '$2y$13$6NEbgA3Iv5H88htftZXB5OP1GNhHnJNJVVqqMA72YOkzoWE5/VjRS', NULL, '123@qq.com', 10, 1675784951, 1675784951, 'gEiMD7TS1cNx9Q0TAvC9JJiWfsXxj0m4_1675784951');
INSERT INTO `user` VALUES (4, 'YX', 'owznswEHad09Lc2dhsnEwAYTwuL4_9yR', '$2y$13$hPLslxJLLnzaFzZiNMQcsuHjCwSG/p8xb.9IJWQTflSHMY7IYl6V.', NULL, '456@qq.com', 10, 1675785947, 1675785947, 'PFBTxKziX0bu1NRHoOI_7NeVMKs0zj1s_1675785947');
INSERT INTO `user` VALUES (5, 'Aurora', 'X-m65Zi61sUTfz8bNkHIBRBSKBjU5tgt', '$2y$13$8lzbGkvUXA37Mr7Vw0l5AOTgjeHzx/8iIwu8KNgWBWqqno/soiLiO', NULL, '798@qq.com', 10, 1675786150, 1675786150, 'UDITtoPOorVKPC-34NpO7pTE6A71Tb6i_1675786150');
INSERT INTO `user` VALUES (6, 'LYY', 'ZlK91IQWW3KA5D3PlydhqW5q-LtfHJs7', '$2y$13$vzFye851AQ71Uztij.rUmO/THXIJNiS8Ck22QsbimYzHpiVvH2cta', NULL, '111@qq.com', 9, 1675866867, 1675866867, 'cvG5MPe3vE1TplyOHCK_jWKac_GdVxTR_1675866867');
INSERT INTO `user` VALUES (7, 'admin', 'nS7srBBk1qUOQvaYtVif494hdoTNSkAc', '$2y$13$xqJevlMBmqqPRVFcHwRTq.CKqqidNNNnHnVnJ4GAz0pEicKnBT2VS', NULL, '', 10, 0, 0, NULL);

SET FOREIGN_KEY_CHECKS = 1;
