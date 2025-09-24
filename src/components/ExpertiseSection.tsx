import { Compass, Globe, TrendingUp, Users, BookOpen, BarChart3 } from 'lucide-react';
import nordicExpertise from '@/assets/nordic-expertise.jpg';

const ExpertiseSection = () => {
  const values = [
    'Transparence',
    'Durabilité', 
    'Innovation',
    'Qualité',
    'Confiance'
  ];

  const countries = [
    { name: 'Suède', flag: '🇸🇪' },
    { name: 'Norvège', flag: '🇳🇴' },
    { name: 'Danemark', flag: '🇩🇰' },
    { name: 'Finlande', flag: '🇫🇮' },
    { name: 'Islande', flag: '🇮🇸' }
  ];

  const expertiseAreas = [
    {
      icon: Globe,
      title: 'Cultures Nordiques',
      description: 'Compréhension approfondie des marchés scandinaves et finlandais, leurs habitudes de consommation et codes culturels.',
      tags: ['Analyse de marché', 'Stratégie d\'entrée', 'Partenariats locaux', 'Négociation']
    },
    {
      icon: TrendingUp,
      title: 'Développement Commercial',
      description: 'Stratégies d\'expansion internationale adaptées aux spécificités culturelles de chaque marché.',
      tags: ['Analyse de marché', 'Stratégie d\'entrée', 'Partenariats locaux', 'Négociation']
    },
    {
      icon: Users,
      title: 'Communication Globale',
      description: 'Adaptation des messages marketing aux différentes cultures pour maximiser l\'impact commercial.',
      tags: ['Marketing culturel', 'Communication digitale', 'Branding international', 'Content strategy']
    },
    {
      icon: Compass,
      title: 'Analyse Opportunités',
      description: 'Identification rapide et précise des opportunités commerciales grâce à la compréhension culturelle.',
      tags: ['Business intelligence', 'Veille concurrentielle', 'Études de faisabilité', 'ROI analysis']
    },
    {
      icon: BookOpen,
      title: 'Conseil Stratégique',
      description: 'Accompagnement dans la définition et mise en œuvre de stratégies internationales performantes.',
      tags: ['Strategic planning', 'Change management', 'Formation équipes', 'Coaching']
    },
    {
      icon: BarChart3,
      title: 'Performance & Analytics',
      description: 'Mesure et optimisation de la performance commerciale sur les marchés internationaux.',
      tags: ['KPI définition', 'Data analysis', 'Reporting', 'Optimisation continue']
    }
  ];

  return (
    <section id="expertise" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
            Mon Expertise
          </h2>
          <p className="text-xl text-neutral-600 max-w-3xl mx-auto">
            Là où la compréhension culturelle fait la différence
          </p>
        </div>

        {/* Main Content */}
        <div className="grid lg:grid-cols-2 gap-16 items-center mb-20">
          <div className="space-y-8">
            <p className="text-lg text-neutral-600 leading-relaxed">
              Contrairement aux connaissances techniques, la maîtrise et la compréhension des 
              cultures et de leurs environnements font toute la différence. Elles permettent 
              une analyse rapide et précise des opportunités commerciales.
            </p>

            <div className="space-y-6">
              <h3 className="text-2xl font-semibold text-neutral-800">
                Pourquoi les cultures nordiques ?
              </h3>
              
              <p className="text-neutral-600 leading-relaxed">
                Ma pratique approfondie des cultures nordiques et de la communication globale 
                constitue la base de ce que je peux vous offrir. Ces marchés exigeants et 
                sophistiqués sont souvent précurseurs de tendances mondiales.
              </p>

              <p className="text-neutral-600 leading-relaxed">
                L'expertise nordique ouvre les portes vers une compréhension plus fine des 
                marchés internationaux, où la confiance et la transparence sont des valeurs 
                cardinales du business.
              </p>

              {/* Values */}
              <div className="flex flex-wrap gap-3">
                {values.map((value) => (
                  <span key={value} className="value-pill">
                    {value}
                  </span>
                ))}
              </div>

              {/* Countries */}
              <div className="space-y-4">
                <h4 className="font-semibold text-neutral-800">Cultures Nordiques</h4>
                <div className="flex flex-wrap gap-3">
                  {countries.map((country) => (
                    <span key={country.name} className="country-tag">
                      <span className="text-lg">{country.flag}</span>
                      {country.name}
                    </span>
                  ))}
                </div>
              </div>
            </div>
          </div>

          <div className="relative">
            <img
              src={nordicExpertise}
              alt="Expertise marchés nordiques"
              className="w-full rounded-2xl shadow-xl"
            />
          </div>
        </div>

        {/* Expertise Areas Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {expertiseAreas.map((area, index) => (
            <div key={index} className="service-card group">
              <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 transition-colors duration-300">
                <area.icon className="w-6 h-6 text-blue-600 group-hover:text-white transition-colors duration-300" />
              </div>
              
              <h3 className="text-xl font-semibold text-neutral-800 mb-3">
                {area.title}
              </h3>
              
              <p className="text-neutral-600 mb-4 leading-relaxed">
                {area.description}
              </p>
              
              <div className="flex flex-wrap gap-2">
                {area.tags.map((tag) => (
                  <span
                    key={tag}
                    className="inline-block px-2 py-1 text-xs font-medium bg-neutral-100 text-neutral-600 rounded"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ExpertiseSection;