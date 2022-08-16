<?php

use XndBogdan\FilesizeConversions\FilesizeConversions;

it('can convert from all sizes to bytes', function () {
    expect(FilesizeConversions::fromBytes(1024)->toBytes())->toBe((float)1024);
    expect(FilesizeConversions::fromKilobytes(1)->toBytes())->toBe((float)1024);
    expect(FilesizeConversions::fromMegabytes(1)->toBytes())->toBe((float)pow(1024, 2));
    expect(FilesizeConversions::fromGigabytes(1)->toBytes())->toBe((float)pow(1024, 3));
    expect(FilesizeConversions::fromTerabytes(1)->toBytes())->toBe((float)pow(1024, 4));
    expect(FilesizeConversions::fromPetabytes(1)->toBytes())->toBe((float)pow(1024, 5));
    expect(FilesizeConversions::fromExabytes(1)->toBytes())->toBe((float)pow(1024, 6));
    expect(FilesizeConversions::fromZettabytes(1)->toBytes())->toBe((float)pow(1024, 7));
    expect(FilesizeConversions::fromYottabytes(1)->toBytes())->toBe((float)pow(1024, 8));
    expect(FilesizeConversions::fromBits(8 * 1)->toBytes())->toBe((float)1);
    expect(FilesizeConversions::fromKilobits(8 * 1024)->toBytes())->toBe((float)pow(1024, 2));
    expect(FilesizeConversions::fromMegabits(8 * pow(1024, 2))->toBytes())->toBe((float)pow(1024, 4));
    expect(FilesizeConversions::fromGigabits(8 * pow(1024, 3))->toBytes())->toBe((float)pow(1024, 6));
    expect(FilesizeConversions::fromTerabits(8 * pow(1024, 4))->toBytes())->toBe((float)pow(1024, 8));
    expect(FilesizeConversions::fromPetabits(8 * pow(1024, 5))->toBytes())->toBe((float)pow(1024, 10));
    expect(FilesizeConversions::fromExabits(8 * pow(1024, 6))->toBytes())->toBe((float)pow(1024, 12));
    expect(FilesizeConversions::fromZettabits(8 * pow(1024, 7))->toBytes())->toBe((float)pow(1024, 14));
    expect(FilesizeConversions::fromYottabits(8 * pow(1024, 8))->toBytes())->toBe((float)pow(1024, 16));
});

it('can convert from bytes to all sizes', function () {
    expect(FilesizeConversions::fromBytes(1024)->toBytes())->toBe((float)1024);
    expect(FilesizeConversions::fromBytes(1024)->toKilobytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 2))->toMegabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 3))->toGigabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 4))->toTerabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 5))->toPetabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 6))->toExabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 7))->toZettabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(pow(1024, 8))->toYottabytes())->toBe((float)1);
    expect(FilesizeConversions::fromBytes(1)->toBits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(1024)->toKilobits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 2))->toMegabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 3))->toGigabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 4))->toTerabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 5))->toPetabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 6))->toExabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 7))->toZettabits())->toBe((float)8);
    expect(FilesizeConversions::fromBytes(pow(1024, 8))->toYottabits())->toBe((float)8);
});

it('can output human readable data', function () {
    expect(FilesizeConversions::fromBytes(1225)->toKilobytesHuman())->toBe('1.2 KB');
});

it('expects negative values', function () {
    expect(FileSizeConversions::fromBytes(-1)->toBytes());
})->throws(\Exception::class);

it('expects unintended quick conversion from type', function () {
    expect(FileSizeConversions::quickConvert('kilobytes', 'frogs', 100));
})->throws(\Exception::class);

it('expects unintended quick conversion to type', function () {
    expect(FileSizeConversions::quickConvert('ducks', 'kilobytes', 100));
})->throws(\Exception::class);

it('expects unintended quick conversion from negative value', function () {
    expect(FileSizeConversions::quickConvert('megabytes', 'kilobytes', -100));
})->throws(\Exception::class);

it('performs quick conversions', function () {
    expect(FilesizeConversions::quickConvert('kilobytes', 'megabytesHuman', 2648))->toBe('2.59 MB');
});
