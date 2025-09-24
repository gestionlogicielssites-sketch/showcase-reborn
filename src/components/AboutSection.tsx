import { Button } from '@/components/ui/button';
import { Quote, Linkedin, Play, Globe, Users, TrendingUp, Target, Handshake } from 'lucide-react';
import globalMarket from '@/assets/global-market.jpg';

const AboutSection = () => {
  const values = [
    { icon: Target, label: 'Stratégie' },
    { icon: Globe, label: 'Culture' },
    { icon: TrendingUp, label: 'Innovation' },
    { icon: Handshake, label: 'Résultats' },
    { icon: Users, label: 'Partenariat' }
  ];

  const stats = [
    {
      number: '25+',
      label: 'Marchés étudiés',
      description: 'Analyses approfondies des marchés nordiques et internationaux'
    },
    {
      number: '100+',
      label: 'Projets menés',
      description: 'Accompagnements réussis d\'entreprises vers l\'international'
    },
    {
      number: '15+',
      label: 'Années d\'expertise',
      description: 'Développement continu de l\'expertise culturelle nordique'
    },
    {
      number: '50+',
      label: 'Entreprises conseillées',
      description: 'De la startup à la multinationale'
    }
  ];

  return (
    <section id="about" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
            À Propos
          </h2>
          <p className="text-xl text-neutral-600 max-w-3xl mx-auto">
            Un parcours dédié au marketing international
          </p>
        </div>

        {/* Main Content */}
        <div className="grid lg:grid-cols-2 gap-16 items-center mb-20">
          <div className="space-y-8">
            <h3 className="text-3xl font-semibold text-neutral-800">
              Mon approche unique
            </h3>
            
            <div className="space-y-6">
              <p className="text-lg text-neutral-600 leading-relaxed">
                Fort de plus de 15 années d'expérience en développement commercial international, 
                j'ai développé une expertise unique dans la compréhension des cultures nordiques 
                et leur application au business global.
              </p>

              <p className="text-neutral-600 leading-relaxed">
                Cette spécialisation me permet d'identifier rapidement les opportunités commerciales 
                et de vous faire économiser un temps précieux dans vos projets d'expansion internationale.
              </p>

              <p className="text-neutral-600 leading-relaxed">
                Ma pratique des cultures nordiques et de la communication globale constitue la 
                base de ce que je peux vous offrir : une analyse culturelle qui se transforme 
                en avantage concurrentiel.
              </p>
            </div>

            {/* Values */}
            <div className="flex flex-wrap gap-4">
              {values.map((value, index) => (
                <div key={index} className="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                  <value.icon className="w-4 h-4 text-blue-600" />
                  <span className="text-sm font-medium text-blue-700">{value.label}</span>
                </div>
              ))}
            </div>

            {/* Social Links */}
            <div className="flex gap-4">
              <Button className="btn-secondary">
                <Linkedin className="w-4 h-4 mr-2" />
                LinkedIn
              </Button>
              <Button className="btn-secondary">
                <Play className="w-4 h-4 mr-2" />
                Mes Vidéos
              </Button>
            </div>
          </div>

          <div className="relative">
            <img
              src={globalMarket}
              alt="Vision globale des marchés internationaux"
              className="w-full rounded-2xl shadow-xl"
            />
          </div>
        </div>

        {/* Stats Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {stats.map((stat, index) => (
            <div key={index} className="text-center space-y-3">
              <div className="stat-number">{stat.number}</div>
              <div className="font-semibold text-neutral-800">{stat.label}</div>
              <p className="text-sm text-neutral-600 leading-relaxed">
                {stat.description}
              </p>
            </div>
          ))}
        </div>

        {/* Quote */}
        <div className="bg-blue-50 rounded-2xl p-8 lg:p-12 text-center">
          <Quote className="w-12 h-12 text-blue-600 mx-auto mb-6" />
          <blockquote className="text-xl lg:text-2xl text-neutral-800 font-medium leading-relaxed mb-6 max-w-4xl mx-auto">
            "Dans un monde de plus en plus connecté, la compréhension culturelle devient le 
            facteur différenciant pour réussir à l'international. Mon objectif est de 
            transformer cette expertise en avantage concurrentiel durable pour vos projets."
          </blockquote>
          <cite className="text-lg font-semibold text-blue-600">— Thierry Robert</cite>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;