/* Author iatwork4u */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET TIME_ZONE = "+05:30";



/* TABLE FOR REGESTERED USERS */
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(25) NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(200) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `mobno` VARCHAR(180) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `country` VARCHAR(30) NOT NULL,
  `exp` VARCHAR(180) NOT NULL,
  `edu` VARCHAR(180) NOT NULL,
  `dob` date NOT NULL,
  `des` TEXT(600),
  PRIMARY KEY (id)
) ENGINE = MyISAM AUTO_INCREMENT = 1 DEFAULT CHARSET = latin1;

/* TABLE FOR RESUME / CV */

CREATE TABLE IF NOT EXISTS `resume` (
  `id` INT(10) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `resume`BLOB NOT NULL,

  PRIMARY KEY (id)
);

/* Table for resume building */
CREATE TABLE IF NOT EXISTS `resume-build`(
  `id` INT(10) NOT NULL,
  `email` VARCHAR(255) NOT NULL,

  PRIMARY KEY (id)

)




/* Table for job post */

CREATE TABLE IF NOT EXISTS `tbl_jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_img` blob NOT NULL,
  `job_date` date NOT NULL,
  `job_loc` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `job_desc` varchar(500) NOT NULL,
  `posted_by` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`job_id`, `job_img`, `job_date`, `job_loc`, `job_title`, `job_desc`, `posted_by`, `company`, `status`) VALUES
  (1, 0xffd8ffe1001845786966000049492a00080000000000000000000000ffec00114475636b79000100040000004f0000ffee000e41646f62650064c000000001ffdb008400030202020202030202030402020204040303030304050404040404050605060505060506060808080808060a0a0b0b0a0a0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c010303030505050a06060a0e0b090b0e100e0e0e0e10100c0c0c0c0c10100c0c0c0c0c0c100c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc0001108007100c803011100021101031101ffc400af0000020203010101000000000000000000010200030405060708090100030101010101000000000000000000000102030405060710000103020305040606080407010000000100020311042112053141511306617122078191a1b13214c1d152231508f042627282b24334e1d2732433a3b3742535551711000201030106030603080301000000000001021112030421314151910561a11371d122325206424314f081b1c1e1f1231562923353ffda000c03010002110311003f00faf5b171dabe46a772896b63de54b916a23860dc14d4b511c30a9a96a0388d2b8aa163588b8741c45552e43b476c63829721d0711d3b94b634860c4aa3b471194ae1da3888a570e83089a954741831bc314aa3a0c01ee482810d280086f0080a0dcbee40ed0e4081da10c0103b439103b421b4454aa132a2a16843094542d0f2ca2a3b4e55acec5dcd9e6288e23e3b54b65a896359c14b91541c46a5c8742c6c63bd45c348b1b1e1b1170ed1c302552ad19acaec0a6a3a0e23454741c3004aa0306f00900c18ee082ad1844484542d18461151da1c8d4aa550397bd150510d0f0454768c184a0ab43ca295c2a0c231bd2b8aa30e41b1150b43959c12a8ed2003722a2b4341c1151d0394f04542d39568ec5dd71e7d0b44637a8722922c6b38050e4168e23dea6a5a88e1aa4ab476b2a81da3b631bd048e23e08a9541c306f4aa3b466b19b92b8768e1a02551da1a7622a351250a2a3511b2928a9762183382551d0218024d8506a808a8e81af0aa2a14262954742628a850994a43a069d8815081bfc281d0397b5004ca8039b6b011b174b91c2a258d6e2954769606848a511836a82a858d663d89542838ec5350a0c051151d0b07625705a1cb5ef4363511b2d54d4a510d022a528841e08a9541803449b0a0c1a51705034725518436a8a8043404ae01b27145c04c8134c0140130190044011004401100738d2015b9cf42d6948740d49ef40d44b1ad5370ed2c14d89361696000a551d830695257a6301552d8e83003bd218689d40c3d6759d23a734abad775ebb8b48d1f4c8ccf757772fc9144c1bc9da49dc0624e016b871cb2c96382ac9ee4899cd4555ec47ca3d5df9d3ea193ab24ff00f3dd36d66e8ed3bee80d56171b9bf754833d5af6ba167d9031a62ee03ee74ff68c1615ebc9def96e8f878fed43c3c9dda4e5f02f85799ed5e557e61fa3fccc9a3d26463ba63a966687c363792b5d1dd5454fcbca2809a83e1203b8557cd772ec79b4df17cd1e6b87b4f4f4fab8e4d9b99eac45303b578953b2d0b7622a20a601068800e608020354005000a275026508a813284ee0227502200e6c1a2daa4d0b5ae0dc3daa58507069dca58e83b494aa3a160e2a6a3a1635c1485a5828520b420d1150b43508a8ed166b9b7b5864b9ba959696b6cd324d34ae11c71c6d15739ce7100003124a126dd16d60d25b4f837f317e72ea3e6b6bf368da65c64e80d06e1c34d822a817b247e137931c0bb363901c1aded24afd4fb07698e8f1a9497f924b6f87fc7de7cb6bf52f34a8be55bbde7976816b47be192ad128c282bb3b37af63553e261a78f03abfc29f613417768e31496bcb2c92225a59230573348a11e215c17991cf7a69f13ba786da347d55e40f9c777ac416bd1fd572fcc5e31822d3f5395c4c933c63c99cb89abbecbab53b0f15f13debb6a849e586ee2bdc7b1a3cae51a33dd97ce1d8115ef4aa4d03982aa9340a4045404a94aa04a945406cc130266080254200950901cab651b174542858c906e52d94916b64e2954aa163650120b47129dea0741c381de81d07048d850141848a42837342076b3c37f371d5a74cf2fedba5ad6e3e5ef7abae9ac9e269f1bec2d47324afecba4c80f1d8be9fed5d35fa8795ad915e6ffa54f2fbace98d4571fe07c7b6f621ce35f105fa04a743c28c0d95ae8f2731b91a7339c30dfb762c679d50de10675f6763cd99d685be081c43cf683427b979139d154f4e10abb4eaf4f2fe9f7d8dc5b3724f0491cec7efcec735d9bba955e74ffcb754ecb7d348fb1746d5adf5bd2ed757b521d6fa844d9da010685c3c4dc37835057c3e483849c5f03a4ce0e01431506cc521509508150954ea2a13304ea20a2a04540440110044c0f97ec3a8ba9ea326a97799a4503e5711ed257d864d3e1fa51e5427939b3aad33adba9602d174f6df31a7c4d9230091fbcda2f3b2e8f0bddb0ea867c8b7ed3a48fafa2e5e69aca4cfc18f691eb345c2f44f833a566d9b8c9b1eb9b5b8765b8b692d78381120a76d28544f46d6e752e196bc0dd5b6b9a7dc9cb0ced73bec9394fa8d1734b0c96f468a48cc6dd8e2b3b4a3135bea9d13a6b4c9b59d7efa1d274bb31596e2e1d9182bb00de5c7700092b5c3a6c9964a18d36d8a792305596c4704ff00ccd794c742bbd5ecf586dc5e5ac53490e953c7241777324750c8d81edcbe320531d871e0bd65f6e6b6f5171d8ff16f4bfb1c6fb960b5b4f6f23aaf2e7cc0b3f30ba46c7a9ed9b1db4f76d31ded9c72f37e52e63347c2e751a7651c2a078485e7f71d13d366789eda6e7cd733ab4d9965c6a47cbbe7ef515bf5cf9853de69b71f39a4e930c5a65b3e948c988b8ca63e20c8e343bfb97dbf62c2f4fa54a4a927b5ff002f23c3d7cd64cb55b96c388d3f4c21d42daf00bd1c998c71e1abda749a769cd8e464ce19721ad37d46cc170e4cb5543bb162499bbd234b2c73a43e1a9f171c767b4ae4cf9abb0eac3037971a799ef9affd48800cee145c51c9481d138d59ec7e50eb0fb512e8971216c33344f6cc79c04a0f8c341fb40d70e0bc1ee30afc48de31a9e8baa6a5258699757b137992db44f918d3b0bc0c2bd955e6c2356914f19e69d33d4fadd9f514536ab7b717b67724b278e490be3024c33869c06538e1b97a79f145e3d8b690a07ad0946d5e48ad184c862b43cd1fa1409c43cd0815a10f6a02d2671c102b499c70405a1ccd40ad3e0fb1fcc5e94c862ffc10d4839a1e2ea09648592022a0864b1661e95fa6e4fb7f255fc74f33c786aa2d568645a7e60b4b8ae79d67d3527325cc6426edc4b9e694c04588db559cfb149adb3f2345a94b723a2d3fcf896f69c9e8fbcb914a3fe5ccf20cf86c220341d8b967d8eddf912e9ef2d6afc0d947e72df5430f466a10bcfc39c4edc7756b6ff4ac5f665ffd1797bc1eb52e06741e6ddcc9137e6ba72e2de6a0cd8c8e6d698d3c00d2ab29767a3d930ff610fdbfb1b3b2f396f618f97f8649caae19a0b87e51bc61b5633ecc9bdfe68b8f708fed538ff3735dbef32b48b1b0bb91fa158584ceb9307e1d3bb3cf95d1b1c66738500692281bbebb97a1dab02d249b4aadecdeb77b0c3579639524e545ec6794c3e5a735f58b57b2cb42419799161fb45cda05ef3ee2d6f83f23cf5a78fd4bcfdc7a1742744f585868daac3a2ebcdb6d3f5ab736b7b0d9b5d73148da8a9cf5688cd302e1e2cb86c5e3ebf5b865923ea436a7555d9fdcedd3e29a8bb65b19ab7746476ece5c9a85bbcb0ff4c87623b015afeadbdc98e38e2b899369a0da40f888bace49a49f7645050fc389a9af1a2ca79a4f81d1050474165a6696699a4793f68c67eb5c5932643aa0a26eb4fd2f4b6bc669dd4e1cb2b932649723a2291d25ae99a1d4032b83b71c9fe0b8a53c86b54749a668fa69734c171964041690431c0f62e5c93971294923a188cf6f0cd1c93be6866606486491af3900228092772e6b6a1ea9830da68ee9839af6b1f514cee14f4ad1a950165475a352cc47dfdb34701301f42e6b1f262bd05f7a6420b2e2063987351938a1efc0a567830b9185d45d4ece9bd16e75bba7c77305972ab1c12c7cc719a6642d0dcf41f1483695ae9f4cf2e4505bdfbaa67932a82ab364ebb99ae2d33c150774d1fd4b151f034aa07cfcc060e85c7b27622d15507e7a7a6d67a2e213f4a3d30aa21bdbca55ad0e3feb43f5a2c4158005fdf6f8bd52c48b10b61f917f8831c48c98f6576fad7eff00e9b47c4d531e3d51913872d8f63dbb5cc79047ab143c6f986ce46c61eabbd8455971741edf85ccb999a7d8e58bd3d797445fc3c8cb6798fd4e3c0cd5af8346d6f3dc47b4acde8317d2ba0ae46741e6e759dab3970eb375cbe12064a3fe646e59cbb66196f8a0bd2325be71f57b5be3d48dc7112d9da3bdf0287dab172f37ef0ac797905de7375396e5335b77fe1d680fac400a3fd547c7abf789ca1c974119e74f56440864f6fe9b1b7f7f2d5ffa9c4f9f5645d0e46c6c3f313e6169b196d95ddac2dde3e55ac27bf2e5aac72760d3cdfc49f52e3a971f94a27f3e3acae097cd1e952b9e73126c22a9276d6a4ad23d8f02faba92f5520c3e76753b4e77c1a6767fb18e95f41aa6fb1e07c5f512d6e589b8b3f3b7a99c464b3d349dcd36ae03d6d942e69f61c1cdf5fe85aee7991dbf4cf9b3af5d160bbd074f9e33f13a0bf16b253b1b2b9c3dabcbd4f64c2b74df4a9d38fbb65e47a3e8bd656f7f20f9dd2e5b079c3ee2ea0969da6b28f6557879fb7282f8649fee6bf91d98fb86493da9ae87a2f4c6a1a7be73f2e6f59265c8d736da3b866ded0ea2f1b5385a5b69d6877e3cd5e2fa1d3dc5bdc5c5ac995f7459230820e9b0822bda2205712924f87fd9fbcddb7e3d0d0e9da5cf1df46f9798f6c46a41b40fad366040aae8c934e3b29d4ce3275e3d0eabe7191e12dab6bc4e970eeed2e0b8ecf1f366bea78790c351b5cb536cc90701a65bd4fa33a3d37cfcd8fd65cbc8c5d61f6177a5ccc1a4366cafb77d1fa640d07973b1c77bb8705a62528cd7c5cf8f81139a71f97c8dd88b4c931fc2a1793b7fd9c4da7b29ed5c959fd4fa9baa72f215f05834d3f038ddda218935297d41b3e91397a6ff00f058ee2797004fe2faff00893b390393a5bf03a0c24f0cf08fa51592fc7fc43f70afb0d248f16851447b258c7baa9a9cbeb151723f259a5e6807eb6d02bdd5e2bf7c743e350e4bdaea0072d70cf5ddc36291ed2c32bded2e7b438b778ae15d9ee4ada155a96b246be303339af6ec35f50d8a5aa3296d43b438bf2486a6b91a282a4f052fc06911ef7572399959b5bb8a121b2549af848cbbea09c7d0992102a0119a9b0903d881d05e58afc596bd9fe08b82d18c0da1cb237b07e810a6c6e02f25d8e01c38a2f158010bc8f13486fda1429dc2b3c0b23b719b21cb5db891503b8d127918588b19148c7039dcd34a8c9fa043c82f4d1950dcea108fb8bb961730d7c1239a7bc50859b69ef41e8233e0ea3eaab51920d675086bb7957d3b47b1e02ca5870cb7c57445dad6e6cc88bac7aee339e2d7f54616ed70bfbadfb3fa8a5e9b4ef7c23d17b829939bea6641e65f9996e72b3aa75788bb652feebe97a87a0d23fcb8f4415c9f53eaccc679c1e6db5b91bd5dabe5db4f9f9ffccb37daf44ff2a3d10fd4cdc24fa9990f9ebe7446d00757ea6f6e1406e8bc61b2a1d5aacdf66d03fca8f41acf9d7e366645f98df3c213567565eb89c4e7313fdf1acdf60edcff00250ff53a85f8d9971fe687cf28e80f534d2818d1f1414ffa6a1fdb9db9fe5af31feb353f5b326dff0035be755b9afe30d986f0f86323d428a1fdb1dbdfe0f30fd76a3ea36317e707ce068f1dddbc87663046b27f69e8793ea1fec355cccdb7fce77999100db9b7b2b8aedac23e821652fb4346f757a8d773d42e47cc1cf6b096179ae1473c0afa41c7debed2de34386e232e0b1e5aeda369207af721c2a352a1966e5971958c8da246d3b2bc0e1ed5958d6f65de99950cac634f35a1d970f054065470de3b565255dc6917cc1712432e72f69639bfaa08230f4021104d049a650cf9770c1ef68ae187b36ad1a64ec2c0cccdcbcc1cc1b398fca47ad45683a0c63932d0b8ca383003f484aa8741807549caff0017c22847bb0408999b1b6afab5c76027653b0a5bcadc037008003fe2e3418fb53b42a30790406383870c28a6831b9cda638f0a6d3e845a3b87e7b48a17160a61825685c1e6b4d48af60dc3d7f5a281b08082fa467c3c4823eb4829c82ee60f00ad3d60f7210344e64f11c6b9a942361ff145130ab458cbb3401e055bb2bb3d34a24e3c81318ccd0dab9de3dc3b3f4ed4a82248f8e85a1e5dc46ef5d53550685e63725398edc0835ef4e8217334b72d76138505502a01c053e2199b827525a10b5aea82ec69b0fd6a9325a397e639a1b28f012369a787bcef2bd2b4e6af100b93378299cec8cf76d18943c7415d52fb731b439d339cc7346da787107c3b2bea5134f81a47c47179569638e0fa6071069fb55a80a5e30bcc896714cec7bc3050648c8a5298e186187059c6068e40320922e6d3eecec71a57b90a3460dd50a26923a1072e71df5f5d555a9929b41f987127365a70a53d293815719115c8069e20dec20d3d382ce502e332efc427680c2fccddfb7db53459fa68abd81d792c64be2c46fa86bc63e821358d3de0e6cacdec733fefa2638d71e5b40f72b589adcc97913de5bcfb40d01d6e19f65c2421f8a8b655de5dcb915366808399d2b476529e9aaa7197813721d92b002d8dcd666def04fd04296b98d343e6b893fad039ad3b3372cfa8b422897063dbcd0dcbbd90d23843ceca4728757d4e29560b7b0a4b904c738ff891cb0e5dcfd951df44aa82920b640d69738d1adc487d00e09342a9599dae23293863b7055685c297c81de1395a7603e2f6aa5144b633e6c039953b7c40d1e08d9b4109288dc858eec104ccc7b8d731a50f7121378f90afe616dc5716f84f68a134ee4388546f9a2e25cec49c4ed3f5a9b282b8e44389140e392b50c070af72f5da388be18a5147973a395e47243d8329e249761877289491515c4be66b836aecb571c40fbc07890eae1dcb38b45b44a3dc03a505ad3b1e37d30de9557017b4b227c603637101e2be224d4776cdbde9493de547916640eaf2dad73d9fa841ad3f67038a9f6954e4473456accec8a5150338a91baa85e20d72dc35035bdaed8dc49f7629547c00d782eab465ed2288684b717b64d95a31bc49aacda2d32e1240dfea3b3b8e200a7ad434df02d506635e59f76f651e7169152786295798d210b2ae22476fd80ecf5e2aabc85688e68356b2847614d3134372258df4710c753887edeeaa57a616b407100e079bc6838a684c81ce35a372a7418c25753127d7f529711d5859793c4f0e8a5702dd98d47a90f1a7bd094da2f9b54bdb96d2e246cd978b1bbff842cd618c77172cadef12299ac20491365611b2b4fe529ca35e224e9c07135b3a3ca62734ed189de78608b64b88ea9863769ed07389a29773c4a001d947b4fbd27ea78095be22889934a1aef146e3e27fc4401d95afa93b9a44db563cf6d6ed766e7ba20ec5a39725380daa63374dc54a0b99c73fe15ec1e72379ac7f7767ff006f07f285c7a7f95fb59d99b7af61674eff0073fc4efe52a357b834bbcc46fc322d0c50adfee1be8fe50ad7c852f98d83ff00b88bf8160fe466cf795c5ffb0fe21ee43f9050ff00d091fc4dfde8fde87b8388b1ff005ffd5ff32a7c3d84c78824f88f7fd088ee1b20f899fa714c11916bb47efb3deb291a447befeee7fde3ef538fe443c9f330c1f1a590220baf802316f0994c5fade85abdc422f7fc3e82b1e25f02a77c2b4e2432b8fe1f4ab60863bd21153b67a1589963b67abdca0638fd6f4ff22940345f0fa1290a3b8b99f09fe1fa54335e07ffd9, '2017-03-26', 'Bangalore, India', 'Software Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Nishanth', 'iatwork4u', b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
