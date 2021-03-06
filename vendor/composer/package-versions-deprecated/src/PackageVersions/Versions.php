<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '2.2.1@955077b68c377310cf9538fc982be11d36ab75d4',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.3.0@100e85a8509b521f010901890f042e9401a3043b',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'egulias/email-validator' => '2.1.24@ca90a3291eee1538cd48ff25163240695bd95448',
  'h4cc/wkhtmltoimage-amd64' => '0.12.4@c4e33f635207af89a704205b8902fb5715ca88be',
  'h4cc/wkhtmltopdf-amd64' => '0.12.4@4e2ab2d032a5d7fbe2a741de8b10b8989523c95b',
  'h4cc/wkhtmltopdf-i386' => '0.12.4@da14486ec8eba1873b026b56126ed02d2f2ae5e3',
  'knplabs/knp-components' => 'v2.5.0@64bf3b5dc974f9637707a447edc911d8da2781d2',
  'knplabs/knp-paginator-bundle' => 'v5.3.0@87ca999b6ac886e3f20a1e3abc07523140509ca4',
  'knplabs/knp-snappy' => 'v1.2.1@7bac60fb729147b7ccd8532c07df3f52a4afa8a4',
  'knplabs/knp-snappy-bundle' => 'v1.7.1@89a633d30d39b71b38511b70e1f0495164140933',
  'laminas/laminas-code' => '3.5.0@cb90ef428da9260c2deaa827b037c20695f968ae',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.0@9999f1432fae467bc93c53f357105b4c31bb994c',
  'markbaker/matrix' => '2.0.0@9567d9c4c519fbe40de01dbd1e4469dbbb66f46a',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'myclabs/php-enum' => '1.7.7@d178027d1e679832db9f38248fcc7200647dc2b7',
  'ocramius/proxy-manager' => '2.10.0@f65ae0f9dcbdd9d6ad3abb721a9e09c3d7d868a4',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'phpoffice/phpspreadsheet' => '1.15.0@a8e8068b31b8119e1daa5b1eb5715a3a8ea8305f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/cache' => 'v5.0.11@5da40a385c8182d18f4cca960bce7191c8f24e07',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.0.11@2306321ef6a21a0de51a139774b6b7b38804815b',
  'symfony/console' => 'v5.0.11@95794074741645473221fb126d5cb4057ad25bf1',
  'symfony/dependency-injection' => 'v5.0.11@9263d52372205c57823bf983bc4f413378830757',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.0.11@e2ab3fe26133c5d997684f1b961acbd6b04e2805',
  'symfony/dotenv' => 'v5.0.11@efd887f012127acad22325d109fe8ddf635f1f97',
  'symfony/error-handler' => 'v5.0.11@d01fba9a55614a1addb0d52d6a9566560b2a2af8',
  'symfony/event-dispatcher' => 'v5.0.11@5c5dd86c7a7962d28c48351c7dd83c9266e4d19d',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/filesystem' => 'v5.0.11@6edf8b9e64e662fcde20ee3ee2ec46fdcc8c3214',
  'symfony/finder' => 'v5.0.11@127bccabf3c854625af9c0162779cf06bc1dd352',
  'symfony/flex' => 'v1.10.0@e38520236bdc911c2f219634b485bc328746e980',
  'symfony/form' => 'v5.0.11@7c4aee4717558389cbfea35fa84d8dd830965db1',
  'symfony/framework-bundle' => 'v5.0.11@0fc0a93f8bbe465d0b483e21b087d432baa92c16',
  'symfony/google-mailer' => 'v5.0.11@dd8a1d46944993fd548c790c5539a2f481b4b89e',
  'symfony/http-foundation' => 'v5.0.11@7ad89bbacd90f7bee1a57e61ed5ecaeaba430706',
  'symfony/http-kernel' => 'v5.0.11@410ce82fbbb06fb926ecaacea8b0af86bc3e7ef2',
  'symfony/inflector' => 'v5.0.11@7eff2643934179cd0e5a6609a583fc22fc495fc4',
  'symfony/intl' => 'v5.0.11@72cfa77bde9d3fdb97eaf04933951d87f999d774',
  'symfony/mailer' => 'v5.0.11@ae0579ff80c1f9b6db5a7a7053733b2568cb9001',
  'symfony/mime' => 'v5.0.11@aa2b2013a8d380e3980a29a79cc0fbcfb02fb920',
  'symfony/monolog-bridge' => 'v5.0.11@d48bf711b47c6fa9a0df747a73ad4d45d8fc5409',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v5.0.11@9f39c468be4b6dae1bad2422f98bab65734055e2',
  'symfony/orm-pack' => 'v1.2.0@21ac491414b5815e5ebb7425908c1d1568d2e775',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/process' => 'v5.0.11@f1052340d8832a5ee55f4160e651a88219a1499e',
  'symfony/property-access' => 'v5.0.11@fdc47c3780ebb29077c3421c6253ccc91040c24a',
  'symfony/routing' => 'v5.0.11@1369ee6823074c406815b65a40d47fd5ee48e517',
  'symfony/security-bundle' => 'v5.0.11@8e8b20291be3b4f9aed4da706450dc355ee036ac',
  'symfony/security-core' => 'v5.0.11@4e4c76fcb091e35aca0601fc337f0c2cf76885ab',
  'symfony/security-csrf' => 'v5.0.11@155a413dc29400e74d2c06f5581da795200386c1',
  'symfony/security-guard' => 'v5.0.11@4d920d91fa44be8ebfe1a101dadde48181d8a4fb',
  'symfony/security-http' => 'v5.0.11@e18913e3663dde1d4712c921211d12185c323c6e',
  'symfony/sendgrid-mailer' => 'v5.0.11@67cedc0fc31f51ddddae31187f44707b45c10201',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.0.11@fbc3084469450c6f6616f5436a00e180ea9ff118',
  'symfony/swiftmailer-bundle' => 'v3.5.1@933be6a3196fb354615290f53ff7ff61e0bdde58',
  'symfony/translation' => 'v5.0.11@762090e92d8df2b91cace8930ce0329674600225',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.0.11@293e5f04eee4da963686beab20960b45e4db68ad',
  'symfony/twig-bundle' => 'v5.0.11@348863cd784b10ea7e1485dc3003c738c6cdf547',
  'symfony/validator' => 'v5.0.11@9084a603e998e7abb010c44f8e3a2046b61fa9f6',
  'symfony/var-dumper' => 'v5.0.11@36d19dbb4b377273dddb820adcdf0cc9dcf57731',
  'symfony/var-exporter' => 'v5.0.11@b87e3aeedb74ee2694932d04153df9d804954cc3',
  'symfony/yaml' => 'v5.0.11@29b60e88ff11a45b708115004fdeacab1ee3dd5d',
  'symfonycasts/reset-password-bundle' => 'v1.1.1@ac39892a5de861209cb7491e056a77a0b872e87d',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/maker-bundle' => 'v1.23.0@ffaee624a20a462ec2da82942d3c9d8fc8dd1421',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/web-profiler-bundle' => 'v5.0.11@3b6dbd2cc76275e117d5c55923c7f511ead22bae',
  'paragonie/random_compat' => '2.*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-ctype' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-iconv' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-php72' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-php71' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-php70' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  'symfony/polyfill-php56' => '*@edb98a2d4249eb233b10262a1fd5dc60563e256f',
  '__root__' => 'dev-master@edb98a2d4249eb233b10262a1fd5dc60563e256f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
