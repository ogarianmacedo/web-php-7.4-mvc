CREATE TABLE `tb_info` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
   `descricao` text COLLATE utf8_unicode_ci NOT NULL,
   `icone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tb_info` (`titulo`, `descricao`, `icone`) VALUES
('Missão', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-chart-bar-32'),
('Visão', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-zoom-split'),
('Valores', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.', 'nc-satisfied');

CREATE TABLE `tb_mensagem` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
   `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
   `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
   `visualizada` tinyint(1) NOT NULL,
   `data_envio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tb_mensagem` (`nome`, `email`, `mensagem`, `visualizada`, `data_envio`) VALUES
('Fábio Cantarino', 'fabio@email.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sollicitudin libero. Nulla nec ipsum gravida, iaculis ipsum vitae, convallis libero. ', 0, '22/05/2021');
