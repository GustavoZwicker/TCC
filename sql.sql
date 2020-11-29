use laravel;

INSERT INTO universidades VALUES (01, '2020-11-26','2020-11-26', 'USP', 'Universidade de São Paulo', 'https://www5.usp.br/', 'São Paulo', 'img/usp_logo.jpg', '/editais/Edital Vestibular USP 2021.pdf'),
(02, '2020-11-26', '2020-11-26', 'UNESP', 'Universidade Estadual Paulista', 'https://www2.unesp.br/', 'São Paulo', 'img/unesplogo.png', '/editais/Edital Vestibular Unesp 2020.pdf'),
(03, '2020-11-26', '2020-11-26', 'UNICAMP', 'Universidade Estadual de Campinas', 'https://www.unicamp.br/unicamp/', 'Campinas', 'img/unicamp.png', '/editais/Edital Vestibular Unicamp 2021.pdf'),
(04, '2020-11-26', '2020-11-26', 'UEM', 'Universidade Estadual de Maringá', 'http://www.uem.br/', 'Maringá','img/uem_logo.jpg', '/editais/Edital Vestibular UEM 2020.pdf');

INSERT INTO provas VALUES (01, '2020-11-27', '2020-11-27', '2018', 'provas/Prova USP 2018.pdf', 'gabaritos/Gabarito USP 2018.pdf', 01),
(02, '2020-11-27', '2020-11-27', '2019', 'provas/Prova USP 2019.pdf', 'gabaritos/Gabarito USP 2019.pdf', 01),
(03, '2020-11-27', '2020-11-27', '2019', 'provas/Prova UNESP Primeira Fase 2019.pdf', 'gabaritos/Gabarito UNESP Primeira Fase 2019.pdf', 02),
(04, '2020-11-27', '2020-11-27', '2020', 'provas/Prova UNESP 2020.pdf', 'gabaritos/Gabarito UNESP 2020.pdf', 02),
(05, '2020-11-27', '2020-11-27', '2019', 'provas/Prova UNICAMP Primeira Fase (Q e X) 2019.pdf', 'gabaritos/Gabarito UNICAMP Primeira Fase 2019.pdf', 03),
(06, '2020-11-27', '2020-11-27', '2019', 'provas/Prova UNICAMP Segunda Fase 2019.pdf', 'gabaritos/Gabarito UNICAMP Segunda Fase 2019.pdf', 03),
(07, '2020-11-27', '2020-11-27', '2019', 'provas/Prova UEM Inverno 2019.pdf', 'gabaritos/Gabarito UEM Inverno 2019.pdf', 04),
(08, '2020-11-27', '2020-11-27', '2019', 'provas/Prova UEM Verao 2019.pdf', 'gabaritos/Gabarito UEM Verao 2019.pdf', 04);