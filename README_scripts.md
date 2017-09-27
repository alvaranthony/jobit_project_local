********** IN WEB FOLDER INDEX.PHP --to register and create database and table bookings **********
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'path'     => __DIR__.'/app.db',
        'dbname'    => 'jobit',
        'user'      => 'root',
        'password'  => 'Password0',
        'charset'   => 'utf8mb4',
    ),
));

if (!$app['db']->getSchemaManager()->tablesExist('bookings')) {
	$app['db']->executeQuery("CREATE TABLE bookings (
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstName VARCHAR(40) NOT NULL,
		lastName VARCHAR(40) NOT NULL,
		phone VARCHAR(10) NOT NULL,
		email VARCHAR(20) DEFAULT NULL,
		birthday DATE NOT NULL,
		startDate DATE NOT NULL,
		endDate DATE NOT NULL,
		arrivalTime TIME DEFAULT NULL,
		additionalInformation TEXT,
		nrOfPeople INT NOT NULL,
		payingMethod VARCHAR(10) NOT NULL)"
	);
}