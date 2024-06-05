-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2024 a las 01:54:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tsoftec-sgcv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hours`
--

CREATE TABLE `hours` (
  `Hid` int(11) NOT NULL,
  `Hname` varchar(255) NOT NULL,
  `Hstatus` int(3) NOT NULL,
  `HdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `HdateUpdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_history`
--

CREATE TABLE `login_history` (
  `LHid` int(11) NOT NULL,
  `Uid` int(11) DEFAULT NULL,
  `LHloginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_history`
--

INSERT INTO `login_history` (`LHid`, `Uid`, `LHloginTime`) VALUES
(1, 1, '2024-04-25 04:04:44'),
(2, 1, '2024-04-25 04:04:44'),
(3, 1, '2024-04-25 04:05:14'),
(4, 1, '2024-04-25 04:05:14'),
(5, 2, '2024-04-25 04:06:43'),
(6, 2, '2024-04-25 04:06:43'),
(7, 2, '2024-04-25 04:06:49'),
(8, 2, '2024-04-25 04:06:49'),
(9, 1, '2024-04-25 04:08:06'),
(10, 1, '2024-04-25 04:08:06'),
(11, 2, '2024-04-25 04:09:41'),
(12, 1, '2024-04-25 04:12:25'),
(13, 1, '2024-04-27 19:30:40'),
(14, 1, '2024-04-28 03:12:22'),
(15, 1, '2024-04-28 03:14:48'),
(16, 1, '2024-04-28 04:10:52'),
(17, 1, '2024-04-28 05:21:46'),
(18, 1, '2024-04-28 05:29:41'),
(19, 1, '2024-04-28 14:47:27'),
(20, 1, '2024-04-28 16:58:56'),
(21, 1, '2024-04-28 17:32:19'),
(22, 1, '2024-04-29 13:04:28'),
(23, 1, '2024-04-29 22:36:08'),
(24, 1, '2024-04-29 23:47:48'),
(25, 1, '2024-04-30 22:21:50'),
(26, 1, '2024-04-30 22:25:58'),
(27, 1, '2024-05-01 14:32:10'),
(28, 1, '2024-05-01 14:46:22'),
(29, 1, '2024-05-01 14:51:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `Pid` int(11) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  `Pdescription` varchar(255) DEFAULT NULL,
  `Pstatus` int(1) NOT NULL DEFAULT 1,
  `PdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `PdateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`Pid`, `Pname`, `Pdescription`, `Pstatus`, `PdateCreated`, `PdateUpdated`) VALUES
(1, 'home', 'Permiso para acceder a la página de inicio', 1, '2024-03-29 23:45:51', '2024-04-29 03:32:09'),
(2, 'auth-logout', 'Permiso para cerrar sesión', 1, '2024-03-29 23:45:51', '2024-03-29 23:45:51'),
(3, 'auth-signup', 'Permiso para registrarse', 1, '2024-03-29 23:45:51', '2024-04-27 22:44:08'),
(4, 'user-add', 'Permiso para agregar usuario', 1, '2024-03-29 23:45:51', '2024-04-27 22:44:02'),
(5, 'user-list', 'Permiso para ver lista de usuarios', 1, '2024-03-29 23:45:51', '2024-03-29 23:45:51'),
(6, 'user-detail', 'Permiso para ver detalle de usuario', 1, '2024-03-29 23:45:51', '2024-03-29 23:45:51'),
(7, 'user-profile', 'Permiso para ver perfil de usuario', 1, '2024-03-29 23:45:51', '2024-03-29 23:45:51'),
(8, 'user-delete', 'Permiso para editar perfil de usuario', 1, '2024-03-29 23:45:51', '2024-04-19 19:30:45'),
(9, 'user-edit', 'Permiso para agregar rol', 1, '2024-03-29 23:45:51', '2024-04-19 19:26:26'),
(10, 'role-list', 'Permiso para ver lista de roles', 1, '2024-03-29 23:45:51', '2024-03-29 23:45:51'),
(11, 'home-tsoftec', NULL, 1, '2024-03-30 20:12:19', '2024-04-29 03:38:43'),
(12, 'home-seller', NULL, 1, '2024-03-31 03:21:36', '2024-04-01 02:57:54'),
(13, 'home-administrator', NULL, 1, '2024-03-31 03:22:49', '2024-04-01 02:58:00'),
(14, 'home-store', NULL, 1, '2024-03-31 03:22:49', '2024-04-01 02:58:07'),
(15, 'home-supervisor', NULL, 1, '2024-03-31 03:22:49', '2024-04-01 02:58:31'),
(16, 'permission-list', NULL, 1, '2024-03-31 03:22:49', '2024-04-02 04:23:56'),
(17, 'permission-modal', NULL, 1, '2024-04-02 04:24:13', '2024-04-02 04:24:13'),
(18, 'permission-role', NULL, 1, '2024-04-04 04:52:48', '2024-04-04 04:53:39'),
(19, 'category-list', NULL, 1, '2024-04-28 01:10:48', '2024-04-28 01:56:01'),
(20, 'product-add', NULL, 1, '2024-04-28 01:10:56', '2024-04-29 01:45:00'),
(21, 'product-delete', NULL, 1, '2024-04-28 01:11:01', '2024-04-29 01:40:50'),
(22, 'product-list', NULL, 1, '2024-04-29 01:30:14', '2024-04-29 03:38:31'),
(23, 'sport-list', NULL, 1, '2024-05-01 15:04:52', '2024-05-01 15:04:52'),
(24, 'sport-hour', NULL, 1, '2024-05-01 15:05:06', '2024-05-01 15:05:06'),
(25, 'sport-hour-sport', NULL, 1, '2024-05-01 15:08:25', '2024-05-01 15:08:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Rid` int(11) NOT NULL,
  `Rname` varchar(50) NOT NULL,
  `Rimage` varchar(250) NOT NULL,
  `Rroute` varchar(250) NOT NULL,
  `Rstatus` int(11) NOT NULL,
  `RdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `Rdateupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Rid`, `Rname`, `Rimage`, `Rroute`, `Rstatus`, `RdateCreated`, `Rdateupdated`) VALUES
(1, 'Cajero', 'Seller-TSE.png', 'navbarSeller', 1, '2024-03-24 01:20:44', '2024-04-27 23:09:33'),
(2, 'Tienda', 'Admin-TSE.png', 'navbarAdmin', 1, '2024-03-23 05:27:51', '2024-04-23 13:14:13'),
(3, 'Supervisor', 'Supervisor-TSE.png', 'navbarSupervisor', 1, '2024-03-24 00:13:36', '2024-03-31 04:08:55'),
(4, 'Administrator', 'Store-TSE.png', 'navbarStore', 1, '2024-03-24 01:03:03', '2024-04-23 13:14:07'),
(5, 'TSoftEc', 'TSoftEc-TSE.png', 'navbarTSoftEc', 1, '2024-03-12 04:00:39', '2024-04-29 13:53:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `Rid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `RPstatus` int(2) NOT NULL,
  `RPdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `RPdateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles_permissions`
--

INSERT INTO `roles_permissions` (`Rid`, `Pid`, `RPstatus`, `RPdateCreated`, `RPdateUpdated`) VALUES
(1, 1, 0, '2024-04-01 06:58:40', '2024-04-25 03:17:32'),
(1, 2, 1, '2024-04-12 08:41:59', '2024-04-25 03:19:40'),
(1, 3, 0, '2024-04-12 04:16:48', '2024-04-25 03:18:41'),
(1, 4, 0, '2024-04-12 04:23:26', '2024-04-25 02:59:05'),
(1, 5, 0, '2024-04-12 04:23:07', '2024-04-25 02:59:08'),
(1, 6, 0, '2024-04-12 04:23:21', '2024-04-13 02:29:21'),
(1, 7, 0, '2024-03-30 04:49:14', '2024-04-13 02:29:37'),
(1, 8, 0, '2024-04-12 04:23:13', '2024-04-25 03:17:41'),
(1, 9, 0, '2024-03-30 04:49:14', '2024-04-25 02:57:21'),
(1, 11, 0, '2024-04-12 04:15:40', '2024-04-13 02:26:46'),
(1, 12, 0, '2024-03-31 08:29:52', '2024-04-25 02:59:20'),
(1, 13, 0, '2024-04-12 04:12:20', '2024-04-13 02:26:42'),
(1, 14, 0, '2024-04-11 06:51:17', '2024-04-25 02:31:44'),
(1, 15, 0, '2024-04-12 04:15:47', '2024-04-25 02:59:17'),
(1, 16, 0, '2024-04-12 04:15:36', '2024-04-13 02:28:57'),
(1, 17, 0, '2024-04-12 04:04:54', '2024-04-13 02:29:01'),
(2, 1, 0, '2024-04-11 06:51:21', '2024-04-25 03:17:44'),
(2, 2, 1, '2024-04-12 08:50:51', '2024-04-25 03:19:38'),
(2, 3, 0, '2024-04-12 08:50:55', '2024-04-25 03:18:39'),
(2, 4, 0, '2024-04-12 08:52:05', '2024-04-12 04:23:46'),
(2, 8, 0, '2024-04-25 03:17:21', '2024-04-25 03:17:28'),
(2, 11, 0, '2024-04-12 04:12:14', '2024-04-13 02:26:47'),
(2, 12, 0, '2024-04-12 04:12:12', '2024-04-25 03:17:51'),
(2, 13, 0, '2024-03-31 08:30:16', '2024-04-25 03:17:57'),
(2, 14, 0, '2024-04-11 06:51:29', '2024-04-13 02:26:49'),
(2, 15, 0, '2024-04-11 06:51:29', '2024-04-25 03:18:01'),
(2, 16, 0, '2024-04-12 04:12:17', '2024-04-13 02:27:15'),
(2, 17, 0, '2024-04-12 04:05:01', '2024-04-13 02:14:02'),
(3, 1, 1, '2024-04-11 06:51:44', '2024-04-29 23:38:34'),
(3, 2, 1, '2024-04-13 01:45:43', '2024-04-25 03:18:56'),
(3, 3, 0, '2024-04-12 08:52:12', '2024-04-25 03:18:36'),
(3, 4, 0, '2024-04-12 08:52:10', '2024-04-25 02:59:13'),
(3, 5, 1, '2024-04-29 23:38:39', '2024-04-29 23:38:39'),
(3, 8, 0, '2024-04-25 03:17:24', '2024-04-25 03:18:11'),
(3, 11, 0, '2024-04-12 04:12:08', '2024-04-13 02:27:06'),
(3, 12, 0, '2024-04-12 04:11:41', '2024-04-13 02:27:03'),
(3, 13, 0, '2024-04-12 04:11:38', '2024-04-25 03:21:18'),
(3, 14, 0, '2024-04-11 06:51:44', '2024-04-13 02:27:00'),
(3, 15, 0, '2024-03-31 08:30:16', '2024-04-25 03:18:52'),
(3, 16, 0, '2024-04-12 04:11:20', '2024-04-13 02:29:05'),
(3, 17, 0, '2024-04-12 04:11:09', '2024-04-13 02:29:09'),
(4, 1, 1, '2024-04-11 06:51:29', '2024-04-25 03:23:32'),
(4, 2, 1, '2024-04-13 01:45:46', '2024-04-25 02:38:15'),
(4, 3, 0, '2024-04-13 01:45:48', '2024-04-25 03:18:32'),
(4, 4, 0, '2024-04-13 02:30:14', '2024-04-25 03:18:29'),
(4, 5, 1, '2024-04-13 02:30:26', '2024-04-25 02:38:34'),
(4, 6, 1, '2024-04-13 02:30:20', '2024-04-13 02:30:20'),
(4, 7, 1, '2024-04-12 04:15:54', '2024-04-12 04:15:54'),
(4, 8, 0, '2024-04-13 02:29:57', '2024-04-25 03:18:16'),
(4, 9, 1, '2024-04-24 04:45:20', '2024-04-24 04:45:20'),
(4, 10, 0, '2024-04-13 02:30:09', '2024-04-25 03:22:01'),
(4, 11, 0, '2024-04-12 04:12:05', '2024-04-13 18:16:20'),
(4, 12, 0, '2024-04-12 04:11:44', '2024-04-25 03:21:44'),
(4, 13, 1, '2024-04-12 04:11:46', '2024-04-25 03:21:13'),
(4, 14, 0, '2024-03-31 08:30:16', '2024-04-25 03:21:49'),
(4, 15, 0, '2024-04-12 04:12:02', '2024-04-25 03:18:24'),
(4, 16, 0, '2024-04-12 04:11:16', '2024-04-25 03:21:28'),
(4, 17, 0, '2024-04-12 04:11:12', '2024-04-25 03:21:32'),
(4, 18, 0, '2024-04-13 02:29:51', '2024-04-25 03:21:37'),
(5, 1, 1, '2024-03-30 04:47:55', '2024-04-25 03:09:17'),
(5, 2, 1, '2024-03-30 04:49:14', '2024-04-25 03:07:57'),
(5, 3, 1, '2024-03-30 04:49:14', '2024-04-25 02:18:33'),
(5, 4, 1, '2024-04-20 13:23:59', '2024-04-25 03:00:15'),
(5, 5, 1, '2024-03-30 04:49:14', '2024-04-25 03:00:12'),
(5, 6, 1, '2024-03-30 04:49:14', '2024-03-30 04:49:14'),
(5, 7, 1, '2024-04-07 07:08:19', '2024-04-25 03:07:54'),
(5, 8, 1, '2024-03-30 04:49:14', '2024-04-25 02:07:20'),
(5, 9, 1, '2024-03-30 04:49:14', '2024-04-25 03:00:08'),
(5, 10, 1, '2024-03-30 04:49:14', '2024-04-25 03:00:06'),
(5, 11, 1, '2024-03-31 01:12:35', '2024-04-25 03:07:49'),
(5, 12, 1, '2024-04-12 04:11:51', '2024-04-25 02:18:31'),
(5, 13, 1, '2024-04-12 04:11:49', '2024-04-25 02:18:28'),
(5, 14, 1, '2024-04-12 04:11:55', '2024-04-25 03:00:19'),
(5, 15, 1, '2024-04-12 04:11:58', '2024-04-24 02:28:50'),
(5, 16, 1, '2024-03-31 08:30:16', '2024-04-12 08:50:11'),
(5, 17, 1, '2024-04-02 09:24:44', '2024-04-02 09:24:44'),
(5, 18, 1, '2024-04-04 09:53:52', '2024-04-25 02:18:24'),
(5, 19, 1, '2024-04-28 01:10:48', '2024-04-28 01:10:48'),
(5, 20, 1, '2024-04-28 01:10:56', '2024-04-28 01:10:56'),
(5, 21, 1, '2024-04-28 01:11:01', '2024-04-28 01:11:01'),
(5, 22, 1, '2024-04-29 01:30:14', '2024-04-29 01:30:14'),
(5, 23, 1, '2024-05-01 15:04:52', '2024-05-01 15:04:52'),
(5, 24, 1, '2024-05-01 15:05:06', '2024-05-01 15:05:06'),
(5, 25, 1, '2024-05-01 15:08:25', '2024-05-01 15:08:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sports`
--

CREATE TABLE `sports` (
  `Sid` int(11) NOT NULL,
  `Sname` varchar(255) NOT NULL,
  `Sdescription` text DEFAULT NULL,
  `Simage` varchar(200) DEFAULT NULL,
  `Sstatus` int(3) NOT NULL,
  `SdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `SdateUpdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sports`
--

INSERT INTO `sports` (`Sid`, `Sname`, `Sdescription`, `Simage`, `Sstatus`, `SdateCreated`, `SdateUpdated`) VALUES
(1, 'AJEDREZ', 'AJEDREZ', 'Ajedrez@-8bit-150px.png', 1, '2024-05-01 23:33:19', '2024-05-01 23:41:48'),
(2, 'ATLETISMO', 'ATLETISMO', 'Atletismo@-8bit-150px.png', 1, '2024-05-01 23:40:48', '2024-05-01 23:41:54'),
(3, 'AUTOMOVILISMO', 'AUTOMOVILISMO', 'Automovilismo@-8bit-150px.png', 1, '2024-05-01 23:42:14', '2024-05-01 23:42:14'),
(4, 'BADMINTON', 'BADMINTON', 'Badminton.png', 1, '2024-05-01 23:42:34', '2024-05-01 23:42:34'),
(5, 'BALONCESTO', 'BALONCESTO', 'Baloncesto@-8bit-150px.png', 1, '2024-05-01 23:42:50', '2024-05-01 23:42:50'),
(6, 'BEISBOL', 'BEISBOL', 'Beisbol@-8bit-150px.png', 1, '2024-05-01 23:43:07', '2024-05-01 23:43:07'),
(7, 'BILLAR', 'BILLAR', 'Billar@-8bit-150px.png', 1, '2024-05-01 23:43:19', '2024-05-01 23:43:19'),
(8, 'BOLOS', 'BOLOS', 'Bolos@-8bit-150px.png', 1, '2024-05-01 23:43:34', '2024-05-01 23:43:34'),
(9, 'BOXEO', 'BOXEO', 'Boxeo@-8bit-150px.png', 1, '2024-05-01 23:43:48', '2024-05-01 23:43:48'),
(10, 'CICLISMO', 'CICLISMO', 'Ciclismo@-8bit-150px.png', 1, '2024-05-01 23:43:59', '2024-05-01 23:43:59'),
(11, 'ECUAVOLEY', 'ECUAVOLEY', 'Ecuavoley@-8bit-150px.png', 1, '2024-05-01 23:44:12', '2024-05-01 23:44:12'),
(12, 'ECUESTRES', 'ECUESTRES', 'Ecuestres@-8bit-150px.png', 1, '2024-05-01 23:44:28', '2024-05-01 23:44:28'),
(13, 'ESCALADA', 'ESCALADA', 'Escalada-y-Adinismo@-8bit-150px.png', 1, '2024-05-01 23:44:38', '2024-05-01 23:44:38'),
(14, 'ESGRIMA', 'ESGRIMA', 'Esgrima@-8bit-150px.png', 1, '2024-05-01 23:44:51', '2024-05-01 23:44:51'),
(15, 'FISICO CULTURISMO Y POTENCIA', 'FISICO CULTURISMO Y POTENCIA', 'Fisico-Culturismo-y-Potencia@-8bit-150px.png', 1, '2024-05-01 23:45:11', '2024-05-01 23:45:11'),
(16, 'FUTBOL', 'FUTBOL', 'Futbol@-8bit-150px.png', 1, '2024-05-01 23:45:29', '2024-05-01 23:45:29'),
(17, 'GIMNASIA ARTISTICA', 'GIMNASIA ARTISTICA', 'Gimnasia-Artistica@-8bit-150px.png', 1, '2024-05-01 23:45:57', '2024-05-01 23:45:57'),
(18, 'GIMNASIA RITMICA', 'GIMNASIA RITMICA', 'Gimnasia-Artistica@-8bit-150px.png', 1, '2024-05-01 23:46:12', '2024-05-01 23:46:12'),
(19, 'PATINAJE', 'PATINAJE', 'Hockey-y-Patinaje@-8bit-150px.png', 1, '2024-05-01 23:46:26', '2024-05-01 23:46:26'),
(20, 'JUDO', 'JUDO\r\n', 'Judo@-8bit-150px.png', 1, '2024-05-01 23:46:45', '2024-05-01 23:46:45'),
(21, 'KARATE DO', 'KARATE DO', 'Karate-Do@-8bit-150px.png', 1, '2024-05-01 23:46:59', '2024-05-01 23:46:59'),
(22, 'KICK BOXING', 'KICK BOXING', 'Kick-Boxing@-8bit-150px.png', 1, '2024-05-01 23:47:16', '2024-05-01 23:47:16'),
(23, 'LEVANTAMIENTO DE PESAS', 'LEVANTAMIENTO DE PESAS', 'Levantamiento-de-Pesas@-8bit-150px.png', 1, '2024-05-01 23:47:29', '2024-05-01 23:47:29'),
(24, 'LUCHA', 'LUCHA', 'Lucha@-8bit-150px.png', 1, '2024-05-01 23:47:37', '2024-05-01 23:47:37'),
(25, 'MOTOCICLISMO', 'MOTOCICLISMO', 'Motociclismo@-8bit-150px.png', 1, '2024-05-01 23:47:49', '2024-05-01 23:47:49'),
(26, 'NATACIÓN', 'NATACIÓN', 'Natacion@-8bit-150px.png', 1, '2024-05-01 23:48:02', '2024-05-01 23:48:02'),
(27, 'PADEL', 'PADEL', 'Padel.png', 1, '2024-05-01 23:48:18', '2024-05-01 23:48:18'),
(28, 'PELOTA NACIONAL', 'PELOTA NACIONAL', 'Pelota-Nacional@-8bit-150px.png', 1, '2024-05-01 23:48:34', '2024-05-01 23:48:34'),
(29, 'RACQUETBALL', 'RACQUETBALL', 'Racquetball.png', 1, '2024-05-01 23:48:54', '2024-05-01 23:48:54'),
(30, 'SQUASH', 'SQUASH', 'Squash@-8bit-150px.png', 1, '2024-05-01 23:49:10', '2024-05-01 23:49:10'),
(31, 'TAE KWON DO', 'TAE KWON DO', 'Tae-Kwon-Do@-8bit-150px.png', 1, '2024-05-01 23:49:28', '2024-05-01 23:49:28'),
(32, 'TENIS', 'TENIS', 'Tenis@-8bit-150px.png', 1, '2024-05-01 23:49:38', '2024-05-01 23:49:38'),
(33, 'TENIS DE MESA', 'TENIS DE MESA', 'tenis-de-mesa@-8bit-150px.png', 1, '2024-05-01 23:49:51', '2024-05-01 23:49:51'),
(34, 'TIRO CON ARCO', 'TIRO CON ARCO', 'Tiro-con-Arco@-8bit-150px.png', 1, '2024-05-01 23:50:04', '2024-05-01 23:50:04'),
(35, 'TIRO OLIMPICO', 'TIRO OLIMPICO', 'Tiro-Olimpico@-8bit-150px.png', 1, '2024-05-01 23:50:15', '2024-05-01 23:50:15'),
(36, 'VOLEIBOL', 'VOLEIBOL', 'Voleibol@-8bit-150px.png', 1, '2024-05-01 23:50:31', '2024-05-01 23:50:31'),
(37, 'WUSHU', 'WUSHU', 'Wushu@-8bit-150px.png', 1, '2024-05-01 23:50:41', '2024-05-01 23:50:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sports_hours`
--

CREATE TABLE `sports_hours` (
  `Sid` int(11) NOT NULL,
  `Hid` int(11) NOT NULL,
  `SHstatus` int(2) NOT NULL,
  `SHdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `SHdateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `Sid` int(3) NOT NULL,
  `Scodigo` int(3) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Scolor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`Sid`, `Scodigo`, `Sname`, `Scolor`) VALUES
(1, 0, 'Inactivo', 'danger'),
(2, 1, 'Activo', 'primary'),
(3, 2, 'Pendiente', 'warning'),
(4, 3, 'Suspendido', 'info'),
(5, 4, 'Bloqueado', 'secondary');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Ulastname` varchar(50) NOT NULL,
  `Ucredential` varchar(15) NOT NULL,
  `Ubirthdate` date NOT NULL,
  `Ugender` varchar(50) NOT NULL,
  `Ucity` varchar(50) NOT NULL,
  `Uaddress` varchar(50) NOT NULL,
  `Unickname` varchar(50) NOT NULL,
  `Uemail` varchar(100) NOT NULL,
  `Upassword` varchar(255) NOT NULL,
  `Uwhatsapp` varchar(255) NOT NULL,
  `Ufacebook` varchar(255) DEFAULT NULL,
  `Utiktok` varchar(255) DEFAULT NULL,
  `Uimage` varchar(254) DEFAULT NULL,
  `Udescription` text NOT NULL,
  `Ustatus` int(11) NOT NULL,
  `UdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `UdateUpdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Uid`, `Uname`, `Ulastname`, `Ucredential`, `Ubirthdate`, `Ugender`, `Ucity`, `Uaddress`, `Unickname`, `Uemail`, `Upassword`, `Uwhatsapp`, `Ufacebook`, `Utiktok`, `Uimage`, `Udescription`, `Ustatus`, `UdateCreated`, `UdateUpdated`) VALUES
(1, 'TSoftware', 'Ecuador', '050434053216', '2001-03-16', 'Masculino', 'Ecuador', 'Quito', 'TSoftEcuador', 'admin@cdp.com', '$2y$10$1D0CNyzhJ9WQzuCs62B49.xZLlSSxKkSG/GDbBnuqXKsGLhzqN7Kq', '0995411589', 'edaniel-valencia', 'edxniel', 'users.jpg', 'Soy Ing. en Informática y Sistemas Computacionales, y actualmente estoy laborando en el área de TICs y soy Developers Junior escalando a Semi-Senior.', 1, '2024-03-17 01:56:40', '2024-03-17 02:03:21'),
(2, 'ADMINISTRADOR', 'TSOFTEC', '5345345345', '1995-01-01', 'Femenino', 'PXNDX', 'PXNDX', 'Administrador', 'admin@admin.com', '$2y$10$1D0CNyzhJ9WQzuCs62B49.xZLlSSxKkSG/GDbBnuqXKsGLhzqN7Kq', '0994340111', 'pxndx', 'pxndx', 'Admin-TSE.jpg', '', 1, '2024-03-17 01:56:40', '2024-03-17 02:02:48'),
(39, 'ROBERTO', 'CARLOS', '0504053216', '1995-08-09', 'Femenino', 'QUITO', 'QUITO', 'roberto', 'roberto@gmail.com', '$2y$10$WZRejbBvjHj02EK4EHawg.GpHswjex6ood9Hxb2m9zcocF/veM7uq', '0995411589', 'roberto', 'roberto', '3d-payment-money-dollar-credit-card-png.webp', '', 1, '2024-04-29 05:17:39', '2024-04-29 05:17:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_and_roles`
--

CREATE TABLE `users_and_roles` (
  `Uid` int(11) NOT NULL,
  `Rid` int(11) NOT NULL,
  `URdateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `URdateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users_and_roles`
--

INSERT INTO `users_and_roles` (`Uid`, `Rid`, `URdateCreated`, `URdateUpdated`) VALUES
(1, 5, '2024-03-31 05:08:31', '2024-03-31 05:08:31'),
(2, 4, '2024-03-31 19:36:33', '2024-04-25 03:24:05'),
(39, 1, '2024-04-29 05:17:39', '2024-04-29 05:17:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`Hid`);

--
-- Indices de la tabla `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`LHid`),
  ADD KEY `Uid` (`Uid`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`Pid`),
  ADD UNIQUE KEY `Pname` (`Pname`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Rid`),
  ADD UNIQUE KEY `Rname` (`Rname`);

--
-- Indices de la tabla `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`Rid`,`Pid`),
  ADD KEY `Pid` (`Pid`);

--
-- Indices de la tabla `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`Sid`);

--
-- Indices de la tabla `sports_hours`
--
ALTER TABLE `sports_hours`
  ADD PRIMARY KEY (`Sid`,`Hid`),
  ADD KEY `Hid` (`Hid`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Sid`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `Unickname` (`Unickname`),
  ADD UNIQUE KEY `Ucredential` (`Ucredential`),
  ADD UNIQUE KEY `Uemail` (`Uemail`);

--
-- Indices de la tabla `users_and_roles`
--
ALTER TABLE `users_and_roles`
  ADD PRIMARY KEY (`Uid`,`Rid`),
  ADD KEY `Rid` (`Rid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hours`
--
ALTER TABLE `hours`
  MODIFY `Hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login_history`
--
ALTER TABLE `login_history`
  MODIFY `LHid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `sports`
--
ALTER TABLE `sports`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `Sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `login_history_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);

--
-- Filtros para la tabla `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_ibfk_1` FOREIGN KEY (`Rid`) REFERENCES `roles` (`Rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roles_permissions_ibfk_2` FOREIGN KEY (`Pid`) REFERENCES `permissions` (`Pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sports_hours`
--
ALTER TABLE `sports_hours`
  ADD CONSTRAINT `sports_hours_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `sports` (`Sid`),
  ADD CONSTRAINT `sports_hours_ibfk_2` FOREIGN KEY (`Hid`) REFERENCES `hours` (`Hid`);

--
-- Filtros para la tabla `users_and_roles`
--
ALTER TABLE `users_and_roles`
  ADD CONSTRAINT `users_and_roles_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`),
  ADD CONSTRAINT `users_and_roles_ibfk_2` FOREIGN KEY (`Rid`) REFERENCES `roles` (`Rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
