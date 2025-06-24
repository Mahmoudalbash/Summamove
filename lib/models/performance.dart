class Performance {
  final int id;
  final int duration;
  final int? speed;
  final double? distance;

  Performance({
    required this.id,
    required this.duration,
    this.speed,
    this.distance,
  });

  factory Performance.fromJson(Map<String, dynamic> json) {
    return Performance(
      id: json['id'],
      duration: json['duration'],
      speed: json['speed'],
      distance: json['distance']?.toDouble(),
    );
  }
}
