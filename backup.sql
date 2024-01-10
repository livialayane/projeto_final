- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: legalcodesolution
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arquivos` (
  `documento` varchar(200) NOT NULL DEFAULT '',
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL DEFAULT '',
  `id_servico` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_servico` (`id_servico`),
  CONSTRAINT `arquivos_ibfk_1` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivos`
--

LOCK TABLES `arquivos` WRITE;
/*!40000 ALTER TABLE `arquivos` DISABLE KEYS */;
INSERT INTO `arquivos` VALUES ('esdfcsdfsd',1,'444444',3),('documentos/Wireframe_LegalCodeSolution.pdf',2,'dddddd',6),('documentos/Especificacao_de_Requisitos.pdf',3,'jjjjj',6);
/*!40000 ALTER TABLE `arquivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contatos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `atendimento` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (2,'2023-12-04 16:11:43','2024-01-06 07:42:26','2023-12-04','legalcodesolution@legal.com','Rua das Ilusões, 123, Bairro dos Sonhos Cidade da Imaginação, RN, CEP: 12345-678','(84) 9 8888-0000\n(84) 9 8787-9898');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destaques`
--

DROP TABLE IF EXISTS `destaques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destaques` (
  `titulo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descricao` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destaques`
--

LOCK TABLES `destaques` WRITE;
/*!40000 ALTER TABLE `destaques` DISABLE KEYS */;
INSERT INTO `destaques` VALUES ('Firmando Compromissos com Confiança e Confiabilidade.','A imagem representa a alegria e conquista na aprovação de um benefício em um contrato, evidenciando expressões de satisfação e êxito das partes envolvidas.','destaques/assinatura.jpg',5),('Beneficio aprovado','A imagem retrata a oficialização de um contrato, destacando o momento solene das assinaturas em papel e simbolizando o compromisso e a força jurídica do acordo.','destaques/imagem.jpg',6),('Revisão de documentos aprovada!','A aprovação da revisão de contrato representa um sucesso nas negociações, fortalecendo a confiança e consolidando uma relação mais equitativa e benéfica entre as partes.','destaques/transferir.jpg',7),('Salário concedido',' Cada centavo é o resultado de desafios superados e metas alcançadas. Grato pela valorização e confiança da empresa. ','destaques/test.jpg',8);
/*!40000 ALTER TABLE `destaques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `nome` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `formacao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipes`
--

LOCK TABLES `equipes` WRITE;
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` VALUES (7,'2023-12-26 04:06:13','2023-12-26 04:18:42','team/team-1.jpg','João Barreto','Advogado especializado em Direito Previdenciário, comprometido com ética e transparência. Sua prática foca na defesa dos direitos dos clientes, com notável experiência e constante busca por atualização. Dedica-se a proporcionar assistência jurídica competente, visando sempre resultados positivos.','Advogada Previdenciário','Universidade Estadual do Rio Grande do Norte - UERN'),(8,'2023-12-26 04:17:12','2023-12-26 04:20:13','team/team-2.jpg','Laura Santos','Assistente administrativo altamente organizado, proativo e eficiente. Habilidades destacadas em gerenciamento de tarefas, comunicação e resolução de problemas. Contribui para a eficácia operacional da organização, mantendo padrões elevados de desempenho.','Assistente Administrativo','Universidade Estadual do Rio Grande do Norte - UERN'),(9,'2023-12-26 04:22:07','2023-12-26 04:22:07','team/team-3.jpg','Pedro Fernandes','Analista contábil experiente, especializado em contabilidade e finanças. Destaca-se por habilidades avançadas em análise de dados, relatórios e conformidade fiscal. Contribui eficientemente para a integridade das informações financeiras e o cumprimento das normas contábeis, sendo essencial para o sucesso organizacional.','Analista Contábil','Universidade Estadual do Rio Grande do Norte - UERN'),(10,'2023-12-26 04:24:00','2023-12-26 04:24:00','team/team-4.jpg','Maria Oliveira','Advogada dedicada e apaixonada pela justiça, com sólida formação acadêmica e experiência prática notável. Guiada por valores éticos, transparência e compromisso, destaca-se pela empatia e busca constante pela atualização para oferecer assistência jurídica competente e alcançar resultados positivos para seus clientes.','Advogada Previdenciária','Universidade Estadual do Rio Grande do Norte - UERN'),(11,'2023-12-26 04:27:44','2023-12-26 04:27:44','team/team-5.jpg','Mário Góis','Contador experiente e meticuloso, especializado em finanças e contabilidade. Destaca-se por habilidades avançadas em análise financeira e conformidade fiscal, contribuindo para a integridade das informações e o sucesso organizacional. Comprometido com a precisão e transparência nas operações financeiras.','Contador','Universidade Federal Rural do Semi-Árido - UFERSA');
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_11_21_225209_create_equipes_table',2),(6,'2023_11_21_225218_create_sobres_table',2),(7,'2023_11_21_225306_create_arquivos_table',2),(8,'2023_11_21_225903_create_beneficios_table',2),(9,'2023_11_21_225915_create_clientes_table',2),(10,'2023_11_21_230006_create_contatos_table',2),(11,'2023_12_14_142732_create_servicos_table',3),(12,'2023_12_14_143756_create_servicos_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `potencial_cliente`
--

DROP TABLE IF EXISTS `potencial_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `potencial_cliente` (
  `telefone` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `id_servico` bigint unsigned NOT NULL,
  `viavel` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_servico` (`id_servico`),
  CONSTRAINT `potencial_cliente_ibfk_1` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `potencial_cliente`
--

LOCK TABLES `potencial_cliente` WRITE;
/*!40000 ALTER TABLE `potencial_cliente` DISABLE KEYS */;
INSERT INTO `potencial_cliente` VALUES ('84 999999999','Mossoró/RN','Maria Joana',6,'Estou enfrentando dúvidas significativas em relação ao meu benefício de aposentadoria e gostaria de saber se você poderia me orientar. As opções e requisitos são complexos, e estou um tanto perdido sobre o que seria mais adequado para a minha situação. Sua experiência em direito previdenciário seria valiosa para me ajudar a entender melhor o processo e tomar decisões informadas. Posso marcar uma consulta para discutirmos mais detalhadamente?',3,0);
/*!40000 ALTER TABLE `potencial_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (3,'Aposentadorias','Por idade, i','2023-12-19 19:39:13','2024-01-09 23:05:34'),(5,'Benefícios','Assistencial ao Idoso (LOAS) e Assistencial à Pessoa com Deficiência (LOAS)','2023-12-19 19:43:20','2023-12-19 19:43:20'),(6,'Cálculos Previdenciário',' Realização de cálculos para verificar o tempo de contribuição, valor do benefício e outras informações relacionadas à previdência.','2023-12-19 19:45:28','2023-12-19 19:45:28'),(7,'Desaposentação','Embora não seja mais possível em muitos casos, alguns advogados podem lidar com situações antigas relacionadas à desaposentação.','2023-12-19 20:18:55','2023-12-19 20:18:55'),(8,'Reabilitação Profissional','Assistência para segurados que necessitam de reabilitação para retornar ao mercado de trabalho após um período de incapacidade.','2023-12-19 20:19:26','2023-12-19 20:19:26'),(9,'Revisão de Benefícios Previdenciários','Avaliação e pedido de revisão de benefícios previdenciários, buscando correções ou ajustes.','2023-12-19 20:20:18','2023-12-19 20:20:18'),(10,'Salário','Família e maternidade.','2023-12-19 20:21:14','2023-12-19 20:21:14'),(11,'Tempo Especial para Profissões Específicas','Avaliação e orientação para profissionais que trabalham em condições especiais, visando a concessão de benefícios específicos.','2023-12-19 20:22:19','2023-12-19 20:22:19'),(13,'bnnn','zsfdxgvfcgh','2023-12-28 22:37:51','2023-12-28 22:37:51');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sobres`
--

DROP TABLE IF EXISTS `sobres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sobres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `missao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valores` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subtitulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sobres`
--

LOCK TABLES `sobres` WRITE;
/*!40000 ALTER TABLE `sobres` DISABLE KEYS */;
INSERT INTO `sobres` VALUES (3,'2024-01-02 21:39:38','2024-01-02 21:39:38','Fornecer serviços jurídicos excelentes, pautados na ética e justiça, comprometidos com a defesa dos interesses dos clientes. Buscamos a transparência, integridade e dedicação, superando expectativas e construindo relações de confiança duradouras.','Cultivamos a integridade como alicerce, guiando decisões éticas e mantendo um ambiente transparente. Valorizamos a excelência, buscando constantemente aprimorar nossas habilidades. O trabalho em equipe promove a colaboração e compartilhamento de conhecimento. Comprometimento com responsabilidade social e ambiental é parte integral de nossa identidade.','Ser referência nacional como um escritório de advocacia inovador e especializado, reconhecido pela qualidade de nossos profissionais e pela resolução eficaz dos desafios legais. Almejamos ser agentes de transformação, adaptando-nos às mudanças legais para manter uma posição de liderança e relevância.','Escritório de Advocacia Previdenciária Lourenna Fernandes.','Nosso escritório de advocacia é um espaço dedicado à excelência jurídica, onde a paixão pelo direito se une à dedicação aos interesses dos clientes. Buscamos ser uma referência nacional e inovadora, destacando-nos pela qualidade e eficiência na resolução de desafios legais. Guiados por valores como integridade, excelência e responsabilidade social, somos mais do que advogados; somos parceiros comprometidos com a construção de relações confiáveis e a busca incessante pela justiça.');
/*!40000 ALTER TABLE `sobres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adm','adm@adm.com',NULL,'$2y$10$5i5x.5n8ZijgP16CSweAj.9qDSfoJMGncnSSUK53.wnduLmtO/v5m',NULL,'2023-10-31 00:19:19','2023-10-31 00:19:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-09 21:32:06
