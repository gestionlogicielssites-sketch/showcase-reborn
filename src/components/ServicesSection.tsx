import { Button } from '@/components/ui/button';
import { Clock, ArrowRight, CheckCircle } from 'lucide-react';

const ServicesSection = () => {
  const services = [
    {
      duration: '2-4 semaines',
      title: 'Audit de Marché International',
      description: 'Analyse complète de vos opportunités sur les marchés nordiques et internationaux',
      features: [
        'Étude de faisabilité culturelle',
        'Analyse concurrentielle approfondie',
        'Recommandations stratégiques',
        'Plan d\'action personnalisé'
      ],
      idealFor: 'Entreprises souhaitant s\'implanter à l\'international',
      color: 'blue'
    },
    {
      duration: '3-6 mois',
      title: 'Stratégie d\'Expansion Nordique',
      description: 'Accompagnement complet pour votre développement sur les marchés scandinaves',
      features: [
        'Stratégie d\'entrée sur mesure',
        'Identification de partenaires locaux',
        'Adaptation produit/service',
        'Formation équipes commerciales'
      ],
      idealFor: 'PME et grandes entreprises en expansion',
      color: 'orange'
    },
    {
      duration: '1-3 mois',
      title: 'Conseil en Communication Globale',
      description: 'Optimisation de votre communication pour les marchés internationaux',
      features: [
        'Adaptation culturelle des messages',
        'Stratégie de contenu multimarché',
        'Guidelines de communication',
        'Formation à la négociation interculturelle'
      ],
      idealFor: 'Équipes marketing et commerciales',
      color: 'green'
    }
  ];

  return (
    <section id="services" className="py-20 bg-neutral-50">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
            Mes Services
          </h2>
          <p className="text-xl text-neutral-600 max-w-3xl mx-auto mb-8">
            Comment je peux vous accompagner
          </p>
          <p className="text-lg text-neutral-600 max-w-4xl mx-auto">
            Des solutions sur mesure pour transformer votre vision internationale en succès 
            commercial, avec l'expertise culturelle comme différenciateur clé.
          </p>
        </div>

        {/* Services Grid */}
        <div className="grid lg:grid-cols-3 gap-8 mb-16">
          {services.map((service, index) => (
            <div key={index} className="service-card h-full">
              {/* Duration Badge */}
              <div className="flex items-center gap-2 mb-4">
                <Clock className="w-4 h-4 text-blue-600" />
                <span className="service-duration">
                  {service.duration}
                </span>
              </div>

              {/* Title */}
              <h3 className="text-2xl font-semibold text-neutral-800 mb-4">
                {service.title}
              </h3>

              {/* Description */}
              <p className="text-neutral-600 mb-6 leading-relaxed">
                {service.description}
              </p>

              {/* Features */}
              <div className="space-y-3 mb-6">
                {service.features.map((feature, featureIndex) => (
                  <div key={featureIndex} className="flex items-start gap-3">
                    <CheckCircle className="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" />
                    <span className="text-neutral-600 text-sm">{feature}</span>
                  </div>
                ))}
              </div>

              {/* Ideal For */}
              <div className="mb-6 p-4 bg-blue-50 rounded-lg">
                <p className="text-sm font-medium text-blue-800 mb-1">Idéal pour :</p>
                <p className="text-sm text-blue-700">{service.idealFor}</p>
              </div>

              {/* CTA */}
              <Button className="w-full btn-secondary group">
                En savoir plus
                <ArrowRight className="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" />
              </Button>
            </div>
          ))}
        </div>

        {/* Bottom CTA */}
        <div className="text-center">
          <Button className="btn-primary text-lg px-8 py-4">
            Discutons de votre projet
          </Button>
        </div>
      </div>
    </section>
  );
};

export default ServicesSection;