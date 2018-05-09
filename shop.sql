-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 06:48 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_order` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bánh mặn', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 'banh-man-thu-vi-nhat-1.jpg', NULL, NULL),
(2, 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', NULL, NULL),
(3, 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', NULL, NULL),
(4, 'Bánh kem', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', NULL, NULL),
(5, 'Bánh crepe', 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 'crepe.jpg', NULL, NULL),
(6, 'Bánh Pizza', 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 'pizza.jpg', NULL, NULL),
(7, 'Bánh su kem', 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 'sukemdau.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Hương Nguyễn', 0, 'huongnguyen@gmail.com', '12 Lê Lai', '0909030407', '2018-03-23 17:14:32', '2018-03-24 17:14:32'),
(2, 'Thái Hùng Văn', 1, 'hungthai@gmail.com', '23 Lê Thị Riêng', '01234567890', '2018-03-23 17:14:32', '2018-03-24 17:14:32'),
(3, 'Hương Hương', 0, 'huongnguyenak96@gmail.com', '33 Hồ Thị Kỷ', '', '2018-03-23 17:14:32', '2018-03-25 17:14:32'),
(4, 'Khoa Phạm', 1, 'khoapham@gmail.com', '57 Lê Thị Riêng, Quận 1', '01234567080', '2018-03-23 17:14:32', '2018-03-25 17:14:32'),
(5, 'Trần Hoài Nhân', 1, 'expamle@gmail.com', '30 South Park Avenue', '0903153553', '2018-03-23 17:14:32', '2018-03-20 19:45:08'),
(6, 'Phạm Hoài Thương', 0, 'amle@gmail.com', '113 Dương Bá Trạc', '', '2018-03-20 19:48:31', '2018-03-20 19:48:31'),
(7, 'Lê Mỹ Nhung', 0, 'amleno@gmail.com', '13 Hà Huy Giáp', '', '2018-03-20 19:51:39', '2018-03-20 19:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_07_113837_create_categories_table', 1),
(4, '2018_05_07_114142_create_customers_table', 1),
(5, '2018_05_07_114416_create_products_table', 1),
(6, '2018_05_07_114629_create_bills_table', 1),
(7, '2018_05_07_114658_create_bill_details_table', 1),
(8, '2018_05_07_114747_create_slides_table', 1),
(9, '2018_05_07_115429_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2018-05-07 16:24:20', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2018-05-07 16:24:20', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2018-05-07 16:24:20', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2018-05-07 16:24:20', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2018-05-07 16:24:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `promotion_price` double NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `delete`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Crepe Sầu riêng', '', 150000, 120000, 'pancake-sau-rieng.jpg', 'hộp', 0, 5, NULL, NULL),
(2, 'Bánh Crepe Chocolate', '', 180000, 160000, 'crepe-chocolate.jpg', 'hộp', 0, 5, NULL, NULL),
(3, 'Bánh Crepe Sầu riêng - Chuối', '', 150000, 120000, 'crepe-chuoi.jpg', 'hộp', 0, 5, NULL, NULL),
(4, 'Bánh Crepe Đào', '', 160000, 0, 'crepe-dao.jpg', 'hộp', 0, 5, NULL, NULL),
(5, 'Bánh Crepe Dâu', '', 160000, 0, 'crepedau.jpg', 'hộp', 0, 5, NULL, NULL),
(6, 'Bánh Crepe Pháp', '', 200000, 180000, 'crepe-phap.jpg', 'hộp', 0, 5, NULL, NULL),
(7, 'Bánh Crepe Táo', '', 160000, 0, 'crepe-tao.jpg', 'hộp', 0, 5, NULL, NULL),
(8, 'Bánh Crepe Trà xanh', '', 160000, 150000, 'crepe-traxanh.jpg', 'hộp', 0, 5, NULL, NULL),
(9, 'Bánh Crepe Sầu riêng và Dứa', '', 160000, 150000, 'saurieng-dua.jpg', 'hộp', 0, 5, NULL, NULL),
(10, 'Bánh Gato Trái cây Việt Quất', '', 250000, 0, '544bc48782741.png', 'cái', 0, 3, NULL, NULL),
(11, 'Bánh sinh nhật rau câu trái cây', '', 200000, 180000, 'banh-sn-rau-cau.jpg', 'cái', 0, 3, NULL, NULL),
(12, 'Bánh trái cây I', '', 350000, 320000, 'banhkem-dau.jpg', 'cái', 0, 3, NULL, NULL),
(13, 'Bánh trái cây II', '', 150000, 120000, 'banhtraicay.jpg', 'hộp', 0, 3, NULL, NULL),
(14, 'Bánh trái cây III', '', 300000, 280000, 'Banh-kem (6).jpg', 'cái', 0, 3, NULL, NULL),
(15, 'Apple Cake', '', 250000, 240000, 'Fruit-Cake_7979.jpg', 'cai', 0, 3, NULL, NULL),
(16, 'Peach Cake', '', 160000, 150000, 'Peach-Cake_3294.jpg', 'cái', 0, 2, NULL, NULL),
(17, 'Bánh ngọt nhân cream táo', '', 180000, 0, '20131108144733.jpg', 'hộp', 0, 2, NULL, NULL),
(18, 'Bánh Chocolate Trái cây', '', 150000, 0, 'Fruit-Cake_7976.jpg', 'hộp', 0, 2, NULL, NULL),
(19, 'Bánh Chocolate Trái cây II', '', 150000, 0, 'Fruit-Cake_7981.jpg', 'hộp', 0, 2, NULL, NULL),
(20, 'Bánh mì Australia', '', 80000, 70000, 'banh mi Australia.jpg', 'hộp', 0, 1, NULL, NULL),
(21, 'Bánh mì Loaf I', '', 100000, 0, 'sli12.jpg', 'hộp', 0, 1, NULL, NULL),
(22, 'Bánh bông lan trứng muối I', '', 160000, 150000, 'banhbonglantrung.jpg', 'hộp', 0, 1, NULL, NULL),
(23, 'Bánh bông lan trứng muối II', '', 180000, 0, 'banhbonglantrungmuoi.jpg', 'hộp', 0, 1, NULL, NULL),
(24, 'Bánh French', '', 180000, 0, 'banh-man-thu-vi-nhat-1.jpg', 'hộp', 0, 1, NULL, NULL),
(25, 'Bánh mặn thập cẩm', '', 50000, 0, 'Fruit-Cake.png', 'hộp', 0, 1, NULL, NULL),
(26, 'Bánh Muffins trứng', '', 100000, 80000, 'maxresdefault.jpg', 'hộp', 0, 1, NULL, NULL),
(27, 'Bánh Scone Peach Cake', '', 120000, 0, 'Peach-Cake_3300.jpg', 'hộp', 0, 1, NULL, NULL),
(28, 'Bánh kem Raspberry Delight', '', 350000, 330000, 'raspberry.jpg', 'cái', 0, 4, NULL, NULL),
(29, 'Bánh kem Chocolate Dâu', '', 300000, 280000, 'banh kem sinh nhat.jpg', 'cái', 0, 4, NULL, NULL),
(30, 'Bánh kem Chocolate Dâu I', '', 380000, 350000, 'sli12.jpg', 'cái', 0, 4, NULL, NULL),
(31, 'Bánh kem Trái cây I', '', 380000, 350000, 'Fruit-Cake.jpg', 'cái', 0, 4, NULL, NULL),
(32, 'Bánh kem Trái cây II', '', 380000, 350000, 'Fruit-Cake_7971.jpg', 'cái', 0, 4, NULL, NULL),
(33, 'Bánh kem Doraemon', '', 280000, 250000, 'p1392962167_banh74.jpg', 'cái', 0, 4, NULL, NULL),
(34, 'Bánh kem Caramen Pudding', '', 280000, 0, 'Caramen-pudding.jpg', 'cái', 0, 4, NULL, NULL),
(35, 'Bánh kem Chocolate Fruit', '', 320000, 300000, 'chocolate-fruit.jpg', 'cái', 0, 4, NULL, NULL),
(36, 'Bánh kem Coffee Chocolate GH6', '', 320000, 300000, 'COFFE-CHOCOLATE.jpg', 'cái', 0, 4, NULL, NULL),
(37, 'Bánh kem Mango Mouse', '', 320000, 300000, 'mango-mousse-cake.jpg', 'cái', 0, 4, NULL, NULL),
(38, 'Bánh kem Matcha Mouse', '', 350000, 330000, 'MATCHA-MOUSSE.jpg', 'cái', 0, 4, NULL, NULL),
(39, 'Bánh kem Flower Fruit', '', 350000, 330000, 'flower-fruits.jpg', 'cái', 0, 4, NULL, NULL),
(40, 'Bánh kem Strawberry Delight', '', 350000, 330000, 'strawberry-delight.jpg', 'cái', 0, 4, NULL, NULL),
(41, 'Bánh su kem sữa tươi chocolate', '', 150000, 0, 'combo-20-banh-su-kem.jpg', 'hộp', 0, 7, NULL, NULL),
(42, 'Bánh su kem sữa tươi', '', 120000, 100000, 'sukem.jpg', 'cái', 0, 7, NULL, NULL),
(43, 'Bánh su kem bơ sữa tươi', '', 150000, 0, 'Singapore-Chewy-Junior.jpg', 'hộp', 0, 7, NULL, NULL),
(44, 'Bánh su kem nhân trái cây sữa tươi', '', 150000, 0, 'banh-su-que.jpg', 'hộp', 0, 7, NULL, NULL),
(45, 'Bánh su kem cà phê', '', 150000, 0, 'banh-su-kem-ca-phe-1.jpg', 'hộp', 0, 7, NULL, NULL),
(46, 'Bánh su kem phô mai', '', 150000, 0, 'banh-su-que-pho-mai.jpg', 'hộp', 0, 7, NULL, NULL),
(47, 'Bánh su kem sữa tươi chocolate', '', 150000, 0, 'combo-20-banh-su-kem.jpg', 'hộp', 0, 7, NULL, NULL),
(48, 'Bánh su kem sữa tươi chiên giòn', '', 150000, 0, 'banh-su-kem-chien.jpg', 'hộp', 0, 7, NULL, NULL),
(49, 'Bánh su kem dâu sữa tươi', '', 150000, 0, 'sukemdau.jpg', 'hộp', 0, 7, NULL, NULL),
(50, 'Bánh su kem nhân dừa', '', 120000, 100000, 'maxresdefault.jpg', 'cái', 0, 7, NULL, NULL),
(51, 'Beefy Pizza', 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', 150000, 130000, '40819_food_pizza.jpg', 'cái', 0, 6, NULL, NULL),
(52, 'Hawaii Pizza', 'Sốt cà chua, ham , dứa, pho mai mozzarella', 120000, 0, 'hawaiian paradise_large.jpg', 'cái', 0, 6, NULL, NULL),
(53, 'Smoke Chicken Pizza', 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000, 0, 'chicken black pepper_large.jpg', 'cái', 0, 6, NULL, NULL),
(54, 'Sausage Pizza', 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000, 0, 'pizza-miami.jpg', 'cái', 0, 6, NULL, NULL),
(55, 'Ocean Pizza', 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000, 0, 'seafood_curry_large.jpg', 'cái', 0, 6, NULL, NULL),
(56, 'All Meaty Pizza', 'Ham, bacon, chorizo, pho mai mozzarella.', 140000, 0, 'all1).jpg', 'cái', 0, 6, NULL, NULL),
(57, 'Tuna Pizza', 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000, 0, 'germany-tuna.jpg', 'cái', 0, 6, NULL, NULL),
(58, 'Bánh Tiramisu - Italia', 'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn', 200000, 0, '234.jpg', '', 0, 2, NULL, NULL),
(59, 'Bánh Táo - Mỹ', 'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.', 200000, 0, '1234.jpg', '', 0, 2, NULL, NULL),
(60, 'Bánh Cupcake - Anh Quốc', 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', 150000, 120000, 'cupcake.jpg', 'cái', 0, 6, NULL, NULL),
(61, 'Bánh Macaron Pháp', 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.', 200000, 180000, 'Macaron9.jpg', '', 0, 2, NULL, NULL),
(62, 'Bánh Sachertorte', 'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm', 250000, 220000, '111.jpg', 'cái', 0, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'banner1.jpg', '2018-05-07 16:20:23', '0000-00-00 00:00:00'),
(2, '', 'banner2.jpg', '2018-05-07 16:20:23', '0000-00-00 00:00:00'),
(3, '', 'banner3.jpg', '2018-05-07 16:20:23', '0000-00-00 00:00:00'),
(4, '', 'banner4.jpg', '2018-05-07 16:20:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hương Hương', 'huonghuong08.php@gmail.com', '', '', 'Hoàng Diệu 2', NULL, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', '', '', '', NULL, NULL, NULL),
(3, 'Expamle', 'expamle@gmail.com', '', '', '', NULL, NULL, NULL),
(4, 'Amle', 'amle@gmail.com', '', '', '', NULL, NULL, NULL),
(5, 'Hương', 'huong08.php@gmail.com', '', '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
